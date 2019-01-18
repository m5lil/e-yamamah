<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('image')->default('default.png');
            $table->bigInteger('phone');
            $table->date('bd');
            $table->boolean('status')->default('0');
            $table->boolean('is_reseller')->default('0');
            $table->integer('parent_id')->nullable();
            $table->unsignedInteger('merchant_category_id');
            $table->bigInteger('nationality_id');
            $table->string('id_image_f');
            $table->string('id_image_b');
            $table->unsignedInteger('area_id');
            $table->string('address');

            $table->foreign('merchant_category_id')->references('id')->on('merchant_categories');
            $table->foreign('area_id')->references('id')->on('areas');
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
        Schema::dropIfExists('merchant_contracts');
    }
}
