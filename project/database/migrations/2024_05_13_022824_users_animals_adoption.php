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
        Schema::create('users_animals_adoption', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('status_adoption');
            $table->unsignedBigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('users');
            $table->unsignedBigInteger('animals_adoption_id')->unsigned()->nullable();
            $table->foreign('animals_adoption_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('animals_adoption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_animals_adoption');
    }
};
