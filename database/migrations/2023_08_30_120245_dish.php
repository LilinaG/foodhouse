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
        //
        Schema::create('dish', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description_short');
            $table->text('description_detail');
            $table->string('photo');
            $table->bigInteger('price');
            $table->text('allergens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
