<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger('category_id')->nullable();
            $table->tinyInteger('speciality_id')->nullable();
            $table->string('request_date')->nullable();
            $table->string('summary')->nullable();
            $table->string('totaltime')->nullable();
            $table->integer('cost')->nullable();
            $table->string('currency')->nullable();
            $table->integer('totalcost')->nullable();
            $table->string('request_type')->nullable();
            $table->string('status')->nullable();
            $table->tinyInteger('hit_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contracts');
    }
}
