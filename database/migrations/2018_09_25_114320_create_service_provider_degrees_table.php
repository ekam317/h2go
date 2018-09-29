<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProviderDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider_degrees', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('type');
            $table->string('degree_name')->nullable();
            $table->string('health_institution_name');
            $table->string('issuing_country')->nullable();
            $table->string('status')->nullable();
            $table->integer('processing_period')->nullable();
            $table->text('admin_remarks')->nullable();

            $table->increments('id');
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
        Schema::dropIfExists('service_provider_degrees');
    }
}
