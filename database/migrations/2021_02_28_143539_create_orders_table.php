<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('orderID')->nullable();
            $table->dateTime('orderDate')->nullable();
            $table->dateTime('shipDate')->nullable();
            $table->dateTime('tranferedDate')->nullable();
            $table->float('totalPrice')->nullable();
            $table->string('imageFileName')->nullable();
            $table->string('address')->nullable();
            $table->integer('userID')->nullable();
            $table->integer('statusID')->nullable();
            $table->integer('bonusID')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
