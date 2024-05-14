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
            $table->id('id');
            $table->string('name');
            $table->string('species');
            $table->string('animal_race');
            $table->string('sex_animal');
            $table->string('age_animal');
            $table->string('descriptions_animals');
            $table->string('photo_animal');
            $table->string('location_addres');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals_adoptions');
    }
};
