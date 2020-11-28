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
            $table->id();
            $table->date('order_date');
            $table->date('order_delivery');
            $table->integer('order_quantity');
            $table->text('order_address');
            $table->decimal('order_latitud');
            $table->decimal('order_longitud');
            $table->integer('customer_document')->unsigned();
            $table->integer('domiciliary_document')->unsigned();
            $table->integer('way_id')->unsigned();
            $table->primary('id');
            $table->foreign('customer_document')->references('customer_document')->on('customers');
            $table->foreign('domiciliary_document')->references('domiciliary_document')->on('domiciliary');
            $table->foreign('way_id')->references('id')->on('way_to_pay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
