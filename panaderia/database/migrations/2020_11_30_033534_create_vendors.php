<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->integer("vendor_document");
            $table->string("vendor_name");
            $table->string("vendor_lastname");
            $table->string("vendor_phone");
            $table->string("vendor_mail");
            $table->string("vendor_password");
            $table->integer('typedocument_id')->unsigned();
            $table->primary('vendor_document');
            $table->foreign('typedocument_id')->references('id')->on('type_documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors', function (Blueprint $table) {
            $table->dropColumn("vendor_document");
            $table->dropColumn("vendor_name");
            $table->dropColumn("vendor_lastname");
            $table->dropColumn("vendor_phone");
            $table->dropColumn("vendor_mail");
            $table->dropColumn("vendor_password");
            $table->dropColumn('typedocument_id');
        });
    }
}
