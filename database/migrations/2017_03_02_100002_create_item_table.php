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
            $table->enum('tipo', ['escudo', 'casco', 'armadura', 'tunica']);
            $table->string('name');
            $table->string('img');
            $table->integer('precio')->default(1);
            $table->integer('levelMin')->default(1);
            $table->integer('danno')->default(0);
            $table->integer('defensa')->default(0);
            $table->integer('probCritico')->default(0);
            $table->integer('constitucion')->default(0);
            $table->integer('inteligencia')->default(0);
            $table->integer('fuerza')->default(0);
            $table->integer('agilidad')->default(0);
            $table->integer('carisma')->default(0);
            $table->integer('bloqueo')->default(0);
            $table->integer('dannoCritico')->default(0);
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
