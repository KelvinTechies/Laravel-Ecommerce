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
        Schema::create('cart_models', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('UserId');
            $table->UnsignedBigInteger('Product_id');
            $table->string('Quantity');
            $table->timestamps();
            $table->foreign('UserId')->references('id')->on('user_create_models')->onDelete('cascade');
            $table->foreign('Product_id')->references('id')->on('products_models')->onDelete('cascade');

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_models');
    }
};
