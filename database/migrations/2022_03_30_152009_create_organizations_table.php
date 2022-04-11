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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->string('org_name');
            $table->string('org_adress_legal_index');
            $table->string('org_adress_legal_city');
            $table->string('org_adress_legal_street');
            $table->string('org_adress_legal_house');
            $table->string('org_adress_legal_corps')->nullable();
            $table->string('org_adress_legal_office')->nullable();
            $table->string('org_adress_post_index');
            $table->string('org_adress_post_city');
            $table->string('org_adress_post_street');
            $table->string('org_adress_post_house');
            $table->string('org_adress_post_corps')->nullable();
            $table->string('org_adress_post_office')->nullable();
            $table->string('org_phone');
            $table->string('org_fax')->nullable();
            $table->string('org_email');
            $table->string('org_website')->nullable();
            $table->string('org_directorate');
            $table->string('org_debit_account');
            $table->string('org_bic');
            $table->integer('org_unp');
            $table->integer('org_okpo')->nullable();

            $table->index('user_id');

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
