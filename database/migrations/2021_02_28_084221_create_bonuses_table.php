<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBonusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('bonusID')->nullable();
            $table->string('bonusName')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('imageFileName')->nullable();
            $table->float('price_condition_minimum')->nullable();
            $table->float('price_condition_maximum')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bonuses');
    }
}
