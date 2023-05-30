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
        Schema::create('order_product_models', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('Order_id');
            $table->UnsignedBigInteger('Product_id')->unsigned()->nullable();
            $table->integer('Quantity')->unsigned();
            $table->foreign('Order_id')->references('id')->on('orderings')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Product_id')->references('id')->on('products_models')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product_models');
    }
};
