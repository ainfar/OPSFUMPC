<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('orderID');
            $table->string('matricID')->nullable();
            $table->string('productName')->nullable();
            $table->string('productPrice')->nullable();
            $table->string('file');
            $table->date('pickupDate')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('pickupLocation')->nullable();
            $table->string('totalPrice')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('delivery_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
