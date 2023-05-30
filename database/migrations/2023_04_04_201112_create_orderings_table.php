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
        Schema::create('orderings', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('User_id');
            $table->string('Address1');
            $table->string('Address2');
            $table->string('Country');
            $table->string('Zip');
            $table->string('Fullname');
            $table->string('Email');
            $table->string('Fone');            
            $table->timestamps();
            $table->foreign('User_id')->references('id')->on('user_create_models')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderings');
    }
};
