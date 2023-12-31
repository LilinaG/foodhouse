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
        Schema::create('dish_category', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dish');
            $table->foreign('id_dish')->references('id_dish')->on('dish');
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id_category')->on('category');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_category');
    }
};
