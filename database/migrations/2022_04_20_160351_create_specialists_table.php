<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->string('specialists_name');
            $table->string('specialists_count');
            $table->string('specialists_tariff_category');
            $table->string('specialists_tariff_coefficient');
            $table->string('specialists_tariff_rate');
            $table->string('specialists_payrise_management_perc')->nullable();
            $table->string('specialists_payrise_management_amount')->nullable();
            $table->string('specialists_payrise_intensity_perc')->nullable();
            $table->string('specialists_payrise_intensity_amount')->nullable();
            $table->string('specialists_payrise_category_perc')->nullable();
            $table->string('specialists_payrise_category_amount')->nullable();
            $table->string('specialists_payrise_specificity_perc')->nullable();
            $table->string('specialists_payrise_specificity_amount')->nullable();
            $table->string('specialists_additional_stimulation_perc')->nullable();
            $table->string('specialists_additional_stimulation_amount')->nullable();

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
        Schema::dropIfExists('specialists');
    }
}
