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
            $table->string('img_ref')->nullable();
            $table->unsignedBigInteger('product_category_animals_id')->nullable();
            $table->foreign('product_category_animals_id')->references('id')->on('product_category_animals');
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->float('price');
            $table->string('puntuation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};


