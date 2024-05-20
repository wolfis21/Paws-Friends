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
        Schema::create('animals_adoptions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species');
            $table->string('animal_race');
            $table->string('sex_animal');
            $table->string('age_animal');
            $table->string('description_animals');
            $table->string('photo_animal');
            $table->string('location_address');
            $table->unsignedBigInteger('rescues_id')->unsigned()->nullable();
            $table->foreign('rescues_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('rescue');
            $table->string('status');
            $table->unsignedBigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals_adoption');
    }
};
