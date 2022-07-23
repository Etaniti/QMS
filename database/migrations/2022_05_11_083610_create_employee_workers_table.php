<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_workers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id');

            $table->string('employee_surname');
            $table->string('employee_name');
            $table->string('employee_patronymic');
            $table->string('employee_photo')->nullable();
            $table->date('employee_birth_date');
            $table->string('employee_gender');
            $table->string('employee_institution')->nullable();
            $table->date('employee_graduation_date')->nullable();
            $table->string('employee_specialization')->nullable();

            $table->string('employee_family_status');
            $table->string('employee_family_structure_name_1')->nullable();
            $table->date('employee_family_structure_date_1')->nullable();

            $table->string('employee_family_structure_name_2')->nullable();
            $table->date('employee_family_structure_date_2')->nullable();

            $table->string('employee_family_structure_name_3')->nullable();
            $table->date('employee_family_structure_date_3')->nullable();

            $table->string('employee_family_structure_name_4')->nullable();
            $table->date('employee_family_structure_date_4')->nullable();

            $table->string('employee_family_structure_name_5')->nullable();
            $table->date('employee_family_structure_date_5')->nullable();

            $table->string('employee_family_structure_name_6')->nullable();
            $table->date('employee_family_structure_date_6')->nullable();

            $table->string('employee_family_structure_name_7')->nullable();
            $table->date('employee_family_structure_date_7')->nullable();

            $table->string('employee_family_structure_name_8')->nullable();
            $table->date('employee_family_structure_date_8')->nullable();

            $table->string('employee_family_structure_name_9')->nullable();
            $table->date('employee_family_structure_date_9')->nullable();

            $table->string('employee_family_structure_name_10')->nullable();
            $table->date('employee_family_structure_date_10')->nullable();

            $table->string('employee_passport_series');
            $table->integer('employee_passport_number');
            $table->string('employee_passport_issuance');
            $table->date('employee_passport_issuance_date');
            $table->date('employee_passport_issuance_term');
            $table->string('employee_living_place');
            $table->string('employee_residence_place');
            $table->date('employee_hiring_date');

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
        Schema::dropIfExists('employee_workers');
    }
}
