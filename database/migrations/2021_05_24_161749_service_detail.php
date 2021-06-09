<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_detail', function (Blueprint $table) {
            $table->bigIncrements('service_detail_id');
            $table->integer('service_id');
            $table->integer('transaction_id');
            $table->integer('service_detail_amount');
            $table->integer('service_detail_discount')->nullable();
            $table->integer('service_detail_subtotal');
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

            $table->foreign('service_id')->references('service_id')->on('service');
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
        Schema::dropIfExists('service_detail');
    }
}
