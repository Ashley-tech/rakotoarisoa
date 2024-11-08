<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_adresses_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    public function up()
    {
        Schema::create('adresse', function (Blueprint $table) {
            $table->id('id_adresse'); // Définit id_adresse comme clé primaire
            $table->string('numero');
            $table->string('rue');
            $table->string('cp');
            $table->string('ville');
            $table->string('region');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}

