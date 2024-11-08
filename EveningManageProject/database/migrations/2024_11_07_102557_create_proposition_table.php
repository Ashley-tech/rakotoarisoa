<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proposition', function (Blueprint $table) {
            $table->id('id_proposition');
            $table->foreignId('id_soiree')->constrained('soiree','id_soiree');
            $table->foreignId('id_categorie')->constrained('categorie','id_categorie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposition');
    }
};
