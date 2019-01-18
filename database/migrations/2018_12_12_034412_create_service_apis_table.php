<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_apis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('service_id');
            $table->unsignedInteger('sdk_id');
            $table->string('external_key');
            $table->enum('service_type', ['payment','inquiry']);
            $table->string('value')->nullable();
            $table->integer('price_type')->comment('1:between,2:equal,3:list');
            $table->float('service_value', 10, 0)->nullable();
            $table->string('service_value_list')->nullable();
            $table->float('min_value', 10, 0);
            $table->float('max_value', 10, 0);
            $table->boolean('commission')->default(false);
            $table->enum('commission_type', ['fixed', 'percent']);
            $table->float('commission_value', 10, 0);

            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('sdk_id')->references('id')->on('sdks');
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
        Schema::dropIfExists('service_apis');
    }
}
