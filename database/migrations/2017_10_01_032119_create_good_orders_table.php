<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodOrdersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('good_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned();
            $table->integer('orders_id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->timestamps();
        });
        Schema::table('good_orders', function (Blueprint $table) {
            $table->foreign('goods_id')
                    ->references('id')->on('goods')->onDelete('cascade');
            $table->foreign('orders_id')
                    ->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('good_orders');
    }

}
