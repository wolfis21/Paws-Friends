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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('type_donation');
            $table->string('description_ref');
            $table->string('qty')->nullable();
            $table->string('photo_ref')->nullable();
            $table->string('destino_fundacion')->nullable();
            $table->unsignedBigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
