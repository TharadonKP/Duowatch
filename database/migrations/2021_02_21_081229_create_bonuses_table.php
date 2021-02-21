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
            $table->integer('bonus_id')->nullable();
            $table->string('bonus_name')->nullable();
            $table->integer('amount')->nullable();
            $table->string('image')->nullable();
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
