<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domiciliaries', function (Blueprint $table) {
            $table->integer("domiciliary_document");
            $table->string("domiciliary_name");
            $table->string("domiciliary_lastname");
            $table->string("domiciliary_phone");
            $table->string("domiciliary_mail");
            $table->string("domiciliary_password");
            $table->integer('typedocument_id')->unsigned();
            $table->primary('domiciliary_document');
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
        Schema::dropIfExists('domiciliaries', function (Blueprint $table){
        $table->dropColumn("domiciliary_document");
        $table->dropColumn("domiciliary_name");
        $table->dropColumn("domiciliary_lastname");
        $table->dropColumn("domiciliary_phone");
        $table->dropColumn("domiciliary_mail");
        $table->dropColumn("domiciliary_password");
        $table->dropColumn('typedocument_id');

        });
    }
}
