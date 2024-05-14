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
<<<<<<< HEAD
        Schema::create('animals_adoptions', function (Blueprint $table) {
=======
        Schema::create('animals_adoption', function (Blueprint $table) {
>>>>>>> 38899f21f843320ae366384ac3647f317c34d534
            $table->id();
            $table->string('name');
            $table->string('species');
            $table->string('animal_race');
            $table->string('sex_animal');
<<<<<<< HEAD
            $table->string('age_animal');
=======
>>>>>>> 38899f21f843320ae366384ac3647f317c34d534
            $table->string('description_animals');
            $table->string('photo_animal');
            $table->string('location_address');
            $table->unsignedBigInteger('rescues_id')->unsigned()->nullable();
            $table->foreign('rescues_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('rescue');
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
