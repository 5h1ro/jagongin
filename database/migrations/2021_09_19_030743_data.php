<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Data extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->string('from');
            $table->string('city');
            $table->integer('money');
            $table->longText('item')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
        });

        Schema::table('datas', function (Blueprint $table) {
            $table->foreign('idUser', 'idUser_fk_02')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
