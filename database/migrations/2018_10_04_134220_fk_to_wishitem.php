<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkToWishitem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wish_items',function (Blueprint $table){
            $table->foreign('wish_list_id')->references('id')->on('wish_lists');
           // $table->foreign('product_id')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wish_items',function (Blueprint $table){
            $table->dropForeign(['wish_list_id']);//non ho la tabella product ancora
        });
    }
}
