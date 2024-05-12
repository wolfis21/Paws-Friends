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
        //TABLA DEMANDS ANIMALS
    
        Schema::create('demands_animals', function(Blueprint $table) {
            $table->id();
            $table->text('description_case');
            $table->string('adress_animals', 45);
            $table->string('photo_ref', 45);

            $table->unsignedBigInteger('motivo_id'); // Clave foránea
            $table->unsignedBigInteger('urgencia_id'); // Clave foránea
            $table->unsignedBigInteger('types_status_id'); // Clave foránea
           
            $table->timestamps(); // created_at update_at 

            $table->foreign('motivo_id')->references('id')->on('motivo')->onDelete('cascade');
            $table->foreign('urgencia_id')->references('id')->on('urgencia')->onDelete('cascade');
            $table->foreign('types_status_id')->references('id')->on('types_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //tabla con nombre existente, eliminar
        Schema::dropIfExists('demands_animals');
    }
};
