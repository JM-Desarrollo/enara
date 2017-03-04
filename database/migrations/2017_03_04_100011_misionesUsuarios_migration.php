<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MisionesUsuariosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misionUsuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned()->index()->nullable();
            $table->integer('idMision')->unsigned()->index()->nullable();
            $table->boolean('estado');
            $table->boolean('destacado');
            $table->timestamps();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('set null');
            $table->foreign('idMision')->references('id')->on('misiones')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('misionUsuario');
    }
}
