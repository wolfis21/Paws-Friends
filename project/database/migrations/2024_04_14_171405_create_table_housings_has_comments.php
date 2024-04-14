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
        Schema::create('housings_has_comments', function (Blueprint $table) {
            $table->foreign('housings_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('housings');
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
        Schema::dropIfExists('housings_has_comments');
    }
};
