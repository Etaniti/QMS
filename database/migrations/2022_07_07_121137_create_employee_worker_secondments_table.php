<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeWorkerSecondmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_worker_secondments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_worker_id');

            $table->date('employee_secondment_term_start');
            $table->date('employee_secondment_term_end');
            $table->string('employee_secondment_order');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_worker_secondments');
    }
}
