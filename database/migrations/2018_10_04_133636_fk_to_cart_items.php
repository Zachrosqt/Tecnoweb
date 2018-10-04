<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkToCartItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart_items',function (Blueprint $table){
            $table->foreign('cart_id')->references('id')->on('carts');
           // $table->foreign('product_id')->references('id')->on('product');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_items',function (Blueprint $table){
            $table->dropForeign(['cart_id']);//non ho la tabella product ancora
        });
    }
}
