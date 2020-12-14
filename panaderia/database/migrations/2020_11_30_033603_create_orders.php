<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id');
            $table->date('order_date');
            $table->date('order_delivery');
            $table->integer('order_quantity');
            $table->text('order_address');
           // $table->decimal('order_latitud');
            //$table->decimal('order_longitud');
            $table->integer('order_price');
            $table->integer('customer_document')->unsigned();
            $table->integer('domiciliary_document')->unsigned();
            $table->integer('way_id')->unsigned();
            $table->primary('id');
            $table->timestamps();
            $table->foreign('customer_document')->references('customer_document')->on('customers');
            $table->foreign('domiciliary_document')->references('domiciliary_document')->on('domiciliaries');
            $table->foreign('way_id')->references('id')->on('way_to_pays');
        });
    }
    public function down()
    {
        Schema::dropIfExists('orders', function (Blueprint $table){
            $table->dropColumn('id');
            $table->dropColumn('order_date');
            $table->dropColumn('order_delivery');
            $table->dropColumn('order_quantity');
            $table->dropColumn('order_address');
           // $table->dropColumn('order_latitud');
           // $table->dropColumn('order_longitud');
            $table->dropColumn('order_price');
            $table->dropColumn('customer_document');
            $table->dropColumn('domiciliary_document');
            $table->dropColumn('way_id');
        });
    }
}
