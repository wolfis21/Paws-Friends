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
        Schema::create('veterinarians_has_puntuations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('puntuations_id');
            $table->foreign('puntuations_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('puntuations');
            $table->unsignedBigInteger('veterinarians_id');
            $table->foreign('veterinarians_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('veterinarians');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarians_has_puntuations');
    }
};
