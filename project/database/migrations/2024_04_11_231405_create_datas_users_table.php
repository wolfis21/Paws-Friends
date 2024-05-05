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
        Schema::create('datas_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('dni');
            $table->string('phone');
<<<<<<< HEAD:project/database/migrations/2024_04_14_172428_create_dog_groomer.php
            $table->string('link_ref')->nullable();
            $table->string('img_ref')->nullable();
=======
            $table->string('address');
            $table->string('photo_user');
>>>>>>> origin/module-3:project/database/migrations/2024_04_11_231405_create_datas_users_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas_users');
    }
};
