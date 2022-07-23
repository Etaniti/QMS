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
            $table->id();
            $table->unsignedBigInteger('organization_id');

            $table->string('worker_name');
            $table->string('worker_count');
            $table->string('worker_tariff_category');
            $table->string('worker_tariff_coefficient');
            $table->string('worker_tariff_rate');
            $table->string('worker_payrise_management_perc')->nullable();
            $table->string('worker_payrise_management_amount')->nullable();
            $table->string('worker_payrise_intensity_perc')->nullable();
            $table->string('worker_payrise_intensity_amount')->nullable();
            $table->string('worker_payrise_category_perc')->nullable();
            $table->string('worker_payrise_category_amount')->nullable();
            $table->string('worker_payrise_specificity_perc')->nullable();
            $table->string('worker_payrise_specificity_amount')->nullable();
            $table->string('worker_additional_stimulation_perc')->nullable();
            $table->string('worker_additional_stimulation_amount')->nullable();

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
