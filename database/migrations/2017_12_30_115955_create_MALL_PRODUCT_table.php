<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1)
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateMALLPRODUCTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MALL_PRODUCT', function (Blueprint $table) {
            $table->increments('mallProductId');
            $table->integer('mallId');
            $table->integer('productId');
            $table->integer('likeCount');
            $table->integer('unlikeCount');
            $table->double('price');
            $table->tinyInteger('onOffer');
            $table->tinyInteger('hasTax');

            $table->index('mallId', 'fk_mall_product_mall_idx');
            $table->index('productId', 'fk_mall_product_product_idx');

            $table->foreign('mallId', 'fk_mall_product_mall')->references('mallId')->on('MALL')->onDelete('NO ACTION
')->onUpdate('NO ACTION');
            $table->foreign('productId', 'fk_mall_product_product')->references('productId')->on('PRODUCT')->onDelete('NO ACTION
')->onUpdate('NO ACTION');

        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MALL_PRODUCT');
    }
}
