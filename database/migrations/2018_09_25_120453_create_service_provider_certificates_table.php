<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProviderCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider_certificates', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('program_title');
            $table->string('issuing_country');
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
        Schema::dropIfExists('service_provider_certificates');
    }
}
