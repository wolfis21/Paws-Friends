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
        Schema::create('users_animals_adoptions', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('status_adoption');
            $table->unsignedBigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('users');
            $table->unsignedBigInteger('animals_adoptions_id')->unsigned()->nullable();
            $table->foreign('animals_adoptions_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('animals_adoptions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_animals_adoption');
    }
};
