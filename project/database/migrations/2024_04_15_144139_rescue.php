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
        Schema::create('rescue', function(Blueprint $table) {
            //Confirmaciones demanda
            $table->id();
            //clave foranea demands animals has fundation - Date , process
            $table->date('date');
            $table->unsignedBigInteger('fundation_id'); //Clave foranea 

            $table->timestamps();

            $table->foreign('fundation_id')->references('id')->on('fundation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
