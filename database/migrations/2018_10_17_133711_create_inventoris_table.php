<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inventori_name');
            $table->integer('id_arsip')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('inventoris', function (Blueprint $table) {
            $table->foreign('id_arsip')->references('id')->on('arsips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventoris');
    }
}
