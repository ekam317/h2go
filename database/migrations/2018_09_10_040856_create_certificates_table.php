<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('board_type')->nullable();
            $table->string('title')->nullable();
            $table->string('country')->nullable();
            $table->string('attachment')->nullable();
            $table->string('status')->nullable();
            $table->tinyInteger('user_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('certificates');
    }
}
