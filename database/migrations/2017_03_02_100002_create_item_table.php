<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('name');
            $table->string('img');
            $table->integer('precio');
            $table->integer('levelMin');
            $table->integer('danno');
            $table->integer('defensa');
            $table->integer('probCritico');
            $table->integer('constitucion');
            $table->integer('inteligencia');
            $table->integer('fuerza');
            $table->integer('agilidad');
            $table->integer('carisma');
            $table->integer('bloqueo');
            $table->integer('dannoCritico');
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
        Schema::dropIfExists('item');
    }
}
