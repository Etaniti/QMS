<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->string('organization_name');
            $table->string('organization_adress_legal_index');
            $table->string('organization_adress_legal_city');
            $table->string('organization_adress_legal_street');
            $table->string('organization_adress_legal_house');
            $table->string('organization_adress_legal_corps')->nullable();
            $table->string('organization_adress_legal_office')->nullable();
            $table->string('organization_adress_post_index');
            $table->string('organization_adress_post_city');
            $table->string('organization_adress_post_street');
            $table->string('organization_adress_post_house');
            $table->string('organization_adress_post_corps')->nullable();
            $table->string('organization_adress_post_office')->nullable();
            $table->string('organization_phone');
            $table->string('organization_fax')->nullable();
            $table->string('organization_email');
            $table->string('organization_website')->nullable();
            $table->string('organization_directorate');
            $table->string('organization_debit_account');
            $table->string('organization_bic');
            $table->integer('organization_unp');
            $table->integer('organization_okpo')->nullable();

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
        Schema::dropIfExists('organizations');
    }
}
