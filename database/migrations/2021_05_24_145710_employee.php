<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->string('employee_id', 7);
            $table->string('city_id', 5);
            $table->string('job_name', 30);
            $table->string('department_name', 30);
            $table->string('employee_name', 50);
            $table->enum('employee_gender', ['L', 'P']);
            $table->string('employee_education', 50);
            $table->string('employee_address', 50);
            $table->string('employee_number', 15);
            $table->date('employee_birthdate')->nullable()->change();
            $table->date('employee_joindate');
            $table->string('employee_ktp', 16)->nullable()->change();
            $table->string('employee_npwp', 15)->nullable()->change();
            $table->integer('employee_salary', 16)->nullable()->change();
            $table->string('employee_status', 30);
            $table->string('employee_email', 50);
            $table->string('employee_password', 8);
            $table->string('employee_token', 10);
            $table->timestamp('createdAt', $precision = 0);
            $table->timestamp('updatedAt', $precision = 0);

            $table->primary('employee_id');
            $table->foreign('city_id')->references('city_id')->on('city');
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
