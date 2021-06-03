<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservationDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_detail', function (Blueprint $table) {
            $table->bigIncrements('reservation_detail_id');
            $table->integer('reservation_id');
            $table->integer('transaction_id');
            $table->integer('reservation_detail_amount');
            $table->integer('reservation_detail_room_discount')->nullable()->change();
            $table->integer('reservation_detail_subtotal');
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

            $table->foreign('reservation_id')->references('reservation_id')->on('reservation');
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
