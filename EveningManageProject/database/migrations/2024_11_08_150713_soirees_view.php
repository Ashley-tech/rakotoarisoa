<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
            CREATE MATERIALIZED VIEW evenings_view AS
            SELECT s.id_soiree, s.titre_soiree, s.date_soiree, s.heure, a.ville AS ville_soiree, s.nbre_places_max,
                COUNT(ea.id_participation) AS participants_actuels
            FROM Soiree s
            JOIN Adresse a ON s.id_adresse = a.id_adresse
            JOIN Compte c ON c.id_adresse = a.id_adresse
            LEFT JOIN soiree_participation ea ON s.id_soiree = ea.id_soiree
            GROUP BY s.id_soiree, s.titre_soiree, s.date_soiree, s.heure, a.ville, s.nbre_places_max
            HAVING COUNT(ea.id_participation) < s.nbre_places_max
            ORDER BY s.date_publication;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP MATERIALIZED VIEW IF EXISTS vue_soirees_disponibles");
    }
};
