<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FoodBeverageDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_beverage_detail', function (Blueprint $table) {
            $table->bigIncrements('food_beverage_detail_id');
            $table->integer('food_beverage_id');
            $table->integer('transaction_id');
            $table->integer('food_beverage_detail_amount');
            $table->integer('food_beverage_detail_discount')->nullable()->change();
            $table->integer('food_beverage_detail_subtotal');
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

            $table->foreign('food_beverage_id')->references('food_beverage_id')->on('food_beverage');
            $table->foreign('transaction_id')->references('transaction_id')->on('transaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
