<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->float('balance', 10, 0)->default(0);
            $table->string('wallet_type');
            $table->string('store_name');
            $table->integer('model_id');
            $table->string('model_type');

            $table->timestamps();
            $table->softDeletes();
        });
        \DB::statement('ALTER TABLE wallets AUTO_INCREMENT = 1111;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
