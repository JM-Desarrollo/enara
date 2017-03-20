<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEquipado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned()->index()->nullable();
            $table->integer('manoPrincipal')->nullable();
            $table->integer('manoSecundaria')->nullable();
            $table->integer('cabeza')->nullable();
            $table->integer('pecho')->nullable();
            $table->integer('botas')->nullable();
            $table->integer('guantes')->nullable();
            $table->integer('anillo1')->nullable();
            $table->integer('anillo2')->nullable();
            $table->integer('collar')->nullable();
            $table->integer('amuleto1')->nullable();
            $table->integer('amuleto2')->nullable();
            $table->integer('capa')->nullable();
            $table->integer('cinturon')->nullable();

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
        Schema::dropIfExists('equipado');
    }
}
