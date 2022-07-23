<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSpecialistLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_specialist_leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_specialist_id');

            $table->date('employee_leave_start');
            $table->date('employee_leave_end');
            $table->string('employee_leave_request');

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
        Schema::dropIfExists('employee_specialist_leaves');
    }
}
