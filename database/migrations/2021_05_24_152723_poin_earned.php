<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PoinEarned extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poin_earned', function (Blueprint $table) {
            $table->integer('customer_id');
            $table->integer('period_id');
            $table->integer('total_poin');
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('period_id')->references('period_id')->on('period');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poin_earned');
    }
}
