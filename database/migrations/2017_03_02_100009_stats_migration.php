<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StatsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fuerza');
            $table->integer('agilidad');
            $table->integer('inteligencia');
            $table->integer('constitucion');
            $table->integer('stamina')->default(10);
            $table->integer('carisma');
            $table->integer('vida')->default(0);
            $table->integer('vidaExtra')->default(0);
            $table->integer('vidaMax')->default(0);
            $table->integer('mana')->default(0);
            $table->integer('manaExtra')->default(0);
            $table->integer('manaMax')->default(0);
            $table->integer('energia')->default(0);
            $table->integer('energiaExtra')->default(0);
            $table->integer('energiaMax')->default(0);
            $table->integer('suerte')->default(0);
            $table->integer('evasion')->default(0);
            $table->integer('supervivencia')->default(0);
            $table->integer('defensa')->default(0);
            $table->integer('resMagica')->default(0);
            $table->integer('domesticar')->default(0);
            $table->integer('combateArms')->default(0);
            $table->integer('combateDist')->default(0);
            $table->integer('probCritico')->default(0);
            $table->integer('dannoCritico')->default(0);
            $table->integer('bloqueo')->default(0);
            $table->integer('regVida')->default(0);
            $table->integer('regEnergia')->default(0);
            $table->integer('regMana')->default(0);
            $table->float('velAtaque')->default(0);
            $table->integer('pesca')->default(0);
            $table->integer('mineria')->default(0);
            $table->integer('herreria')->default(0);
            $table->integer('carpinteria')->default(0);
            $table->integer('sastreria')->default(0);
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
        Schema::dropIfExists('stats');
    }
}


            
