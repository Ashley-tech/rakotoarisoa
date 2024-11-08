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
        Schema::create('compte_interet', function (Blueprint $table) {
            $table->foreignId('id_compte')->constrained('compte','id_compte');
            $table->foreignId('id_interet')->constrained('centre_interets','id_interet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compte_interet');
    }
};
