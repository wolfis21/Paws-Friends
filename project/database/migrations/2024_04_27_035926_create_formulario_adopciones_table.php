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
<<<<<<< HEAD:project/database/migrations/2024_04_14_170917_create_table_housings.php
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('phone');
            $table->string('description_location');
            $table->string('type_animals');
            $table->longText('food_offer');
            $table->string('img_ref')->nullable();
=======
        Schema::create('formulario_adopciones', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('Dni');
            $table->string('telefono');
>>>>>>> origin/module-3:project/database/migrations/2024_04_27_035926_create_formulario_adopciones_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario_adopciones');
    }
};
