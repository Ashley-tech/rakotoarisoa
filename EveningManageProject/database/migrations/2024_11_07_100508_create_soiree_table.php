<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('soirees', function (Blueprint $table) {
            $table->id('id_soiree');
            $table->string('titre_soiree');
            $table->date('date_soiree');
            $table->time('heure');
            $table->string('ville_soiree');
            $table->boolean('payante');
            $table->decimal('prix_place', 8, 2)->nullable();
            $table->integer('nbre_places_max');
            $table->foreignId('id_adresse')->constrained('adresses');
            $table->foreignId('id_interet')->constrained('centre_interets');
            $table->foreignId('id_compte')->constrained('comptes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('soirees');
    }
};
