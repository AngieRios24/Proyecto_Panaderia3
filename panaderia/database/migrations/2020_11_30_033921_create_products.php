<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer("id");
            $table->string("product_name");
            $table->string("product_description");
            $table->integer("product_price");
            $table->string("product_photo");
            $table->integer('category_id')->unsigned();
            $table->primary('id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products', function (Blueprint $table){
            $table->dropColumn('id');
            $table->dropColumn('product_name');
            $table->dropColumn('product_description');
            $table->dropColumn('product_price');
            $table->dropColumn('product_photo');
            $table->dropColumn('category_id');
        });
    }
}
