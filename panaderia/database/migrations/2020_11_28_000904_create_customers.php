<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer("customer_document");
            $table->string("customer_name");
            $table->string("customer_lastname");
            $table->string("customer_phone");
            $table->string("customer_mail");
            $table->integer('typedocument_id')->unsigned();
            $table->primary('customer_document');
            $table->foreign('typedocument_id')->references('id')->on('type_document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
