<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', 20)->unique;
            $table->string('name',60);
            $table->enum('jk',['l','p']);
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->enum('agama',['islam','kristen','katolik','hindu','budha','lainnya']);
            $table->enum('status',['belum kawin', 'kawin', 'cerai hidup', 'cerai mati']);
            $table->string('pekerjaan',40);
            $table->enum('golongan',['a','b','ab','o']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penduduks');
    }
}
