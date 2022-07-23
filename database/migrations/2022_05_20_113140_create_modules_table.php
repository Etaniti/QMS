<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('structure_id');

            $table->string('post_1')->nullable();
            $table->string('post_2')->nullable();
            $table->string('post_3')->nullable();
            $table->string('post_4')->nullable();
            $table->string('post_5')->nullable();
            $table->string('post_6')->nullable();
            $table->string('post_7')->nullable();
            $table->string('post_8')->nullable();
            $table->string('post_9')->nullable();
            $table->string('post_10')->nullable();

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
        Schema::dropIfExists('modules');
    }
}
