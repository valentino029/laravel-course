<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawanInventorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_inventorys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_karyawan')->unsigned();
            $table->integer('id_inventori')->unsigned();
            $table->timestamps();
        });

        Schema::table('karyawan_inventorys', function (Blueprint $table){
            $table->foreign('id_karyawan')->references('id')->on('karyawans');
        });

        Schema::table('karyawan_inventorys', function (Blueprint $table){
            $table->foreign('id_inventori')->references('id')->on('inventoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan_inventorys');
    }
}
