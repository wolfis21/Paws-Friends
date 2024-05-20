<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('types_status', function(Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->timestamps();

        });
        DB::table('types_status')->insert([
            ['name' => 'En Espera'],
            ['name' => 'Aceptada'],
            ['name' => 'Rechazada'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types_status');
    }
};
