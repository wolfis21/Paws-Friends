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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('img_ref');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('quantity'); // Nuevo atributo para la cantidad
            $table->timestamps();
        });

        // Agregar la columna para la categoría de animal y su clave foránea
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('category_animal_id')->nullable();
            $table->foreign('category_animal_id')->references('id')->on('categories_animal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_animal_id']);
            $table->dropColumn('category_animal_id');
        });

        Schema::dropIfExists('products');
    }
};


