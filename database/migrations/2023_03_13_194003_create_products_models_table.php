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
        Schema::create('products_models', function (Blueprint $table) {
            $table->id();
            // $table->UnsignedBigInteger('AdminId');
            $table->string('DogName');
            $table->string('Breed');
            $table->string('Color');
            $table->string('Quantity');
            $table->string('DogType');
            $table->string('Price');
            $table->longText('Image');
            $table->longText('Description');
            $table->timestamps();
            // $table->foreign('AdminId')->references('id')->on('user_create_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_models');
    }
};
