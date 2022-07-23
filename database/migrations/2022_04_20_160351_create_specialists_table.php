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
            $table->id();
            $table->unsignedBigInteger('organization_id');

            $table->string('specialist_name');
            $table->string('specialist_count');
            $table->string('specialist_tariff_category');
            $table->string('specialist_tariff_coefficient');
            $table->string('specialist_tariff_rate');
            $table->string('specialist_payrise_management_perc')->nullable();
            $table->string('specialist_payrise_management_amount')->nullable();
            $table->string('specialist_payrise_intensity_perc')->nullable();
            $table->string('specialist_payrise_intensity_amount')->nullable();
            $table->string('specialist_payrise_category_perc')->nullable();
            $table->string('specialist_payrise_category_amount')->nullable();
            $table->string('specialist_payrise_specificity_perc')->nullable();
            $table->string('specialist_payrise_specificity_amount')->nullable();
            $table->string('specialist_additional_stimulation_perc')->nullable();
            $table->string('specialist_additional_stimulation_amount')->nullable();

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
