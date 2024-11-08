<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('soiree', function (Blueprint $table) {
            $table->id('id_soiree');
            $table->string('titre_soiree');
            $table->date('date_soiree');
            $table->time('heure');
            $table->boolean('payante');
            $table->decimal('prix_place', 8, 2)->nullable();
            $table->integer('nbre_places_max');
            $table->foreignId('id_adresse')->constrained('adresse','id_adresse')->onDelete('cascade');
            $table->foreignId('id_interet')->constrained('centre_interets','id_interet')->onDelete('cascade');
            $table->foreignId('id_compte')->constrained('compte','id_compte')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('soirees');
    }
};
