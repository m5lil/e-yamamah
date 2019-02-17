<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceApiParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_api_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('service_api_id');
            $table->string('external_api_id');
            $table->text('name');
            $table->integer('order');
            $table->boolean('visible');
            $table->boolean('required');
            $table->string('type', 2);
            $table->string('default_value', 25);
            $table->integer('min_length');
            $table->integer('max_length');
            $table->string('pattern')->nullable();

            $table->foreign('service_api_id')->references('id')->on('service_apis');
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
        Schema::dropIfExists('service_api_parameters');
    }
}
