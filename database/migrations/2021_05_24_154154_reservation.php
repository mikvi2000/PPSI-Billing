<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigIncrements('reservation_id');
            $table->integer('transaction_id');
            $table->integer('customer_id');
            $table->dateTime('date_checkin', $precision = 0);
            $table->dateTime('date_checkout', $precision = 0);
            $table->integer('deposite_amount')->nullable();
            $table->string('reservation_notes', 50)->nullable();
            $table->string('deposite_notes', 50)->nullable();
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

            $table->foreign('customer_id')->references('customer_id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
