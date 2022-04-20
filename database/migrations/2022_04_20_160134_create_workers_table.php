<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->string('workers_name');
            $table->string('workers_count');
            $table->string('workers_tariff_category');
            $table->string('workers_tariff_coefficient');
            $table->string('workers_tariff_rate');
            $table->string('workers_payrise_management_perc')->nullable();
            $table->string('workers_payrise_management_amount')->nullable();
            $table->string('workers_payrise_intensity_perc')->nullable();
            $table->string('workers_payrise_intensity_amount')->nullable();
            $table->string('workers_payrise_category_perc')->nullable();
            $table->string('workers_payrise_category_amount')->nullable();
            $table->string('workers_payrise_specificity_perc')->nullable();
            $table->string('workers_payrise_specificity_amount')->nullable();
            $table->string('workers_additional_stimulation_perc')->nullable();
            $table->string('workers_additional_stimulation_amount')->nullable();

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
        Schema::dropIfExists('workers');
    }
}
