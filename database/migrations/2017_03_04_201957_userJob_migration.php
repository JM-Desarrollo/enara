<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserJobMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userJob', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned()->index()->nullable();
            $table->integer('idTrabajo')->unsigned()->index()->nullable();
            $table->time('inicio')->nullable();
            $table->time('fin')->nullable();
            $table->integer('duracion')->nullable();
            $table->timestamps();
            // CLAVES FORANEAS
            $table->foreign('idUser')->references('id')->on('users')->onDelete('set null');
            $table->foreign('idTrabajo')->references('id')->on('trabajo')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userJob');
    }
}
