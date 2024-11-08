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
        Schema::create('soiree_participation', function (Blueprint $table) {
            $table->foreignId('id_soiree')->constrained('soiree','id_soiree');
            $table->foreignId('id_participation')->constrained('participation','id_participation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soiree_participation');
    }
};
