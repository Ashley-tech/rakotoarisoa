<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// database/migrations/xxxx_xx_xx_xxxxxx_create_comptes_table.php
class CreateComptesTable extends Migration
{
    public function up()
    {
        Schema::create('compte', function (Blueprint $table) {
            $table->id('id_compte');
            $table->string('nom');
            $table->string('prenom');
            $table->string('mel')->unique();
            $table->date('naissance');
            $table->integer('age');
            $table->string('mdp');
            $table->foreignId('id_adresse')->constrained('adresse','id_adresse')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}

