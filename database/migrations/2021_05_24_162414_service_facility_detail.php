<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceFacilityDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_facility_detail', function (Blueprint $table) {
            $table->bigIncrements('service_facility_detail_id');
            $table->integer('service_facility_id');
            $table->integer('transaction_id');
            $table->integer('service_facility_detail_amount');
            $table->integer('service_facility_detail_subtotal');
            $table->string('service_facility_detail_notes', 50)->nullable()->change();
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

            $table->foreign('service_facility_id')->references('service_facility_id')->on('service_facility');
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
