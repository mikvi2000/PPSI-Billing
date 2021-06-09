<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoomFacilityDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_facility_detail', function (Blueprint $table) {
            $table->bigIncrements('room_facility_detail_id');
            $table->integer('room_facility_id');
            $table->integer('transaction_id');
            $table->integer('room_facility_detail_amount');
            $table->integer('room_facility_detail_subtotal');
            $table->string('room_facility_detail_notes', 50)->nullable();
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

            $table->foreign('room_facility_id')->references('room_facility_id')->on('room_facility');
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
        Schema::dropIfExists('room_facility_detail');
    }
}
