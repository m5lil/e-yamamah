<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('model_id');
            $table->string('model_type')->comment('USER MODEL');
            $table->enum('status', array('payment','inquiry','inquire'));
            $table->integer('external_id')->nullable();
            $table->unsignedInteger('service_id');
            $table->float('amount', 10, 0);
            $table->float('total_amount', 10, 0);
            $table->text('request_map')->nullable();
            $table->enum('response_type', array('pending','done','fail'))->default('pending');
            $table->text('response')->nullable();
            $table->text('ip')->nullable();
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('transactions');
    }
}
