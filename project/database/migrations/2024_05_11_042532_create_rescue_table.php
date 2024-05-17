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
        Schema::create('rescue', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id'); //Clave foranea 
            $table->unsignedBigInteger('demands_animals_id'); //Clave foranea 
            $table->unsignedBigInteger('demand_animal_has_fundation_id'); //Clave foranea 

            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('demands_animals_id')->references('id')->on('demands_animals')->onDelete('cascade');
            $table->foreign('demand_animal_has_fundation_id')->references('id')->on('demand_animal_has_fundation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rescue');
    }
};
