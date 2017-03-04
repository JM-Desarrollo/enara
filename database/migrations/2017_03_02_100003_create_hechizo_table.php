<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHechizoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hechizo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('name');
            $table->string('desc');
            $table->integer('danno');
            $table->integer('costoMana');
            $table->integer('precio');
            $table->integer('costoEnergia');
            $table->integer('claseExclusiva');
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
        Schema::dropIfExists('hechizo');
    }
}
