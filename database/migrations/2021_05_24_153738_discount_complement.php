<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiscountComplement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_complement', function (Blueprint $table) {
            $table->bigIncrements('discount_complement_id');
            $table->integer('period_id');
            $table->string('discount_complement_name', 50);
            $table->string('discount_complement_type', 25);
            $table->integer('discount_complement_amount');
            $table->integer('discount_complement_number_of_people');
            $table->integer('discount_complement_rank');
            $table->string('discount_complement_notes', 100)->nullable();
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

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
        Schema::dropIfExists('discount_complement');
    }
}
