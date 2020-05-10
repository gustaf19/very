<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KkPenduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kk_penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kk_id');
            $table->unsignedInteger('penduduk_id');

            $table->foreign('kk_id')->references('id')->on('kks')->onDelete('cascade');

            $table->foreign('penduduk_id')->references('id')->on('penduduks')->onDelete('cascade');

            //$table->primary('kk_id','penduduk_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kk_penduduk');
    }
}
