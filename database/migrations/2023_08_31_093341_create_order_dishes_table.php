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
        Schema::create('order_dishes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dish');
            $table->foreign('id_dish')->references('id')->on('dishes');
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id')->on('orders');
            $table->integer('quantity');
            $table->decimal('cost_dish');
            $table->decimal('cost_total_dish');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_dish');
    }
};
