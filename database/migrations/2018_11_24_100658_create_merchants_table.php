<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 11)->unique();
            $table->bigInteger('username')->unique();
            $table->string('password');
            $table->boolean('status')->default('0');
            $table->unsignedInteger('merchant_contract_id');
            $table->unsignedInteger('wallet_id');

            $table->boolean('change_password')->default(1);
            $table->string('language_key', 2)->default('ar');
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();

            $table->foreign('wallet_id')->references('id')->on('wallets');
            $table->foreign('merchant_contract_id')->references('id')->on('merchant_contracts');
            $table->rememberToken();
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
        Schema::dropIfExists('merchants');
    }
}
