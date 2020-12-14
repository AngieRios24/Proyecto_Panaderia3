<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWayToPays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('way_to_pays', function (Blueprint $table) {
            $table->integer("id");
            $table->string("way_name");
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('way_to_pays', function (Blueprint $table){
            $table->dropColumn('id');
            $table->dropColumn('way_name');
        });
    }
}
