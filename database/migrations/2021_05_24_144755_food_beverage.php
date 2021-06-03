<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FoodBeverage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_beverage', function (Blueprint $table) {
            $table->mediumIncrements('food_beverage_id');
            $table->string('food_beverage_name', 50);
            $table->string('food_beverage_type', 15);
            $table->integer('food_beverage_price');
            $table->integer('food_beverage_poin_amount');
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_beverage');
    }
}
