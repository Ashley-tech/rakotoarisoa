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
        Schema::create('participation', function (Blueprint $table) {
            $table->id('id_participation');
            $table->double('note');
            $table->text('commentaires');
            $table->foreignId('id_compte')->constrained('compte','id_compte')->onDelete('cascade');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE participation ADD CONSTRAINT check_note_range CHECK (note >= 0 AND note <= 20)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participation');
    }
};
