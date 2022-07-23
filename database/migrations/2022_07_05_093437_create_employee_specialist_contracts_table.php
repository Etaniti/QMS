<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSpecialistContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_specialist_contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_specialist_id');

            $table->string('employment_contract_type');
            $table->date('employment_contract_term_start')->nullable();
            $table->date('employment_contract_term_end')->nullable();
            $table->string('employment_contract');

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
        Schema::dropIfExists('employee_specialist_contracts');
    }
}
