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
        Schema::create('products_has_puntuations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('products');
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
        Schema::dropIfExists('products_has_puntuations');
    }
};
