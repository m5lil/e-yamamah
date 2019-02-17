<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('wallet_id');
            $table->enum('status', array('pending','error','done'))->default('pending');
            $table->unsignedInteger('reseller_wallet_id');
            $table->float('system_commission', 10, 0);
            $table->float('merchant_commission', 10, 0);
            $table->float('reseller_commission', 10, 0);
            $table->dateTime('from_date_time')->nullable();
            $table->dateTime('to_date_time')->nullable();
            $table->integer('num_success')->comment('العميلة الناجحه رقم #');
            $table->integer('num_error')->comment('العميلة الفاشلة رقم #');
            $table->integer('staff_id')->nullable();

            $table->foreign('wallet_id')->references('id')->on('wallets');
            $table->foreign('reseller_wallet_id')->references('id')->on('wallets');
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
        Schema::dropIfExists('settlements');
    }
}
