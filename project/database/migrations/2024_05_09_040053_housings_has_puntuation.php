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
        Schema::create('housings_has_puntuations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('housings_id');
            $table->foreign('housings_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('housings');
            $table->unsignedBigInteger('puntuations_id');
            $table->foreign('puntuations_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('puntuations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housings_has_puntuation');
    }
};
