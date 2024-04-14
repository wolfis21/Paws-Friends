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
        Schema::create('dog_groomer_has_comments', function (Blueprint $table) {
            $table->foreign('dog_groomer_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('dog_groomer');
            $table->foreign('comments_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dog_groomer_has_comments');
    }
};
