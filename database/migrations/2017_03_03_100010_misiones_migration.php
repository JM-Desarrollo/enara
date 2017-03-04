<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MisionesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misiones', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipoMision', [1, 2, 3] ); // 1 -> Objetiva ("X cantidad de Y") | 2 -> Repetitiva ("Hacer X tantas veces") | 3 -> Objetiva ("Hacer X elemento")
            $table->enum('impMision', [1, 2, 3, 4, 5] ); // 1 -> Principal | 2 -> Secundaria | 3 -> Torneo | 4 -> Evento | 5 - > Coliseo
            $table->string('name');
            $table->mediumtext('descripcion');
            $table->integer('objetivo');
            $table->integer('cantidad');
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
        Schema::dropIfExists('misiones');
    }
}
