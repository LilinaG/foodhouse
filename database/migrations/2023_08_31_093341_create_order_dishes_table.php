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
            $table->unsignedBigInteger('dish_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('quantity');
            $table->decimal('cost_dish', 10, 2);
            $table->decimal('cost_total_dish', 10, 2);
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
