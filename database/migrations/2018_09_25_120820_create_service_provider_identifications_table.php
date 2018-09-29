<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProviderIdentificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider_identifications', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('type');
            $table->integer('number');
            $table->date('expiration_date')->nullable();
            $table->string('profession_name')->nullable();
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
        Schema::dropIfExists('service_provider_identifications');
    }
}
