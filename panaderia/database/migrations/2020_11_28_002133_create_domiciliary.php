<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domiciliary', function (Blueprint $table) {
            $table->integer("domiciliary_document");
            $table->string("domiciliary_name");
            $table->string("domiciliary_lastname");
            $table->string("domiciliary_phone");
            $table->string("domiciliary_mail");
            $table->integer('typedocument_id')->unsigned();
            $table->primary('domiciliary_document');
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
        Schema::dropIfExists('domiciliary');
    }
}
