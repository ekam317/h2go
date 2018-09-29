<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medical_education_level')->nullable();
            $table->string('diploma_education_level')->nullable();
            $table->string('health_institution_name')->nullable();
            $table->string('issuing_country')->nullable();
            $table->string('degree_name')->nullable();
            $table->string('attachements')->nullable();
            $table->string('path')->nullable();
            $table->string('user_id')->nullable();
            $table->string('status')->nullable()->default("pending");
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('degrees');
    }
}
