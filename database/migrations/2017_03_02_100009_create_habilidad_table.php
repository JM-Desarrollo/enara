<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('magia')->nullable();
            $table->integer('robar')->nullable();
            $table->integer('evasion')->nullable();
            $table->integer('supervivencia')->nullable();
            $table->integer('comercio')->nullable();
            $table->integer('defensa')->nullable();
            $table->integer('pesca')->nullable();
            $table->integer('mineria')->nullable();
            $table->integer('herreria')->nullable();
            $table->integer('carpinteria')->nullable();
            $table->integer('resMagica')->nullable();
            $table->integer('peleteria')->nullable();
            $table->integer('sastreria')->nullable();
            $table->integer('domesticar')->nullable();
            $table->integer('combateArms')->nullable();
            $table->integer('combateDist')->nullable();
            $table->integer('idUser')->unsigned()->index()->nullable();
            
            $table->foreign('idUser')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('habilidad');
    }
}
