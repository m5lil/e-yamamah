<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sdk_id')->nullable();
            $table->tinyInteger('service_provider_id')->default(0);
            $table->unsignedInteger('commission_id');
            $table->unsignedInteger('output_id');
            $table->text('name');
            $table->text('description')->nullable();
            $table->boolean('request_amount')->default(0);
            $table->boolean('status')->default('0');
            $table->string('icon')->nullable();
            $table->integer('order')->nullable();

            $table->foreign('sdk_id')->references('id')->on('sdks');
//            $table->foreign('commission_id')->references('id')->on('commissions');
//            $table->foreign('output_id')->references('id')->on('outputs');

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
        Schema::dropIfExists('services');
    }
}
