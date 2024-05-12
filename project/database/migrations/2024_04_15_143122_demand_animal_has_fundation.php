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
        Schema::create('demand_animal_has_fundation', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('demands_animals_id'); //Clave foranea 
            $table->unsignedBigInteger('fundation_id'); //Clave foranea 
            $table->text('description');
            $table->unsignedBigInteger('types_status_id'); // Clave foránea
            //fecha
          //  $table->date('date');   
            //Proceso de estado de demanda
          //  $table->enum('status_process', ['pendiente', 'aceptada', 'rechazada']);

            $table->timestamps();

             $table->foreign('demands_animals_id')->references('id')->on('demands_animals')->onDelete('cascade');
             $table->foreign('fundation_id')->references('id')->on('fundation')->onDelete('cascade');
             $table->foreign('types_status_id')->references('id')->on('types_status')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demand_animal_has_fundation');
    }
};
