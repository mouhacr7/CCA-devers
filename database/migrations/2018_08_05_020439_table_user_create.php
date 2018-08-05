<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUserCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->integer('mobile');
            $table->integer('id_musique');
            $table->integer('id_danse');
            $table->string('messaage');
            $table->timestamps();

            $table->foreign('id_musique')->references('id')->on('musique');
            $table->foreign('id_danse')->references('id')->on('danse');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
