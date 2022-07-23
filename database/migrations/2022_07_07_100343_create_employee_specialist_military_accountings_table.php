<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSpecialistMilitaryAccountingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_specialist_military_accountings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_specialist_id');

            $table->string('employee_military_card');

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
        Schema::dropIfExists('employee_specialist_military_accountings');
    }
}
