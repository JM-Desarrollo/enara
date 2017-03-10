<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('level')->default(1);
            $table->integer('exp')->default(0);
            $table->integer('const')->default(1);
            $table->integer('inteligencia')->default(1);
            $table->integer('fuerza')->default(1);
            $table->integer('agilidad')->default(1);
            $table->integer('carisma')->default(1);
            $table->integer('stamina')->default(10);
            $table->integer('suerte')->default(1);
            $table->integer('gold')->default(0);
            $table->integer('diamond')->default(0);
            $table->integer('ptsHonor')->default(0);
            $table->integer('esquirla')->default(0);
            $table->integer('ptsEvent')->default(0);
            $table->integer('ptsTorneo')->default(0);
            $table->integer('skillsPoints')->default(0);
            $table->integer('idClase')->unsigned()->index()->nullable();
            $table->integer('idRaza')->unsigned()->index()->nullable();
            $table->integer('idJob')->unsigned()->index()->nullable();
            
            $table->foreign('idClase')->references('id')->on('clase')->onDelete('set null');
            $table->foreign('idJob')->references('id')->on('trabajo')->onDelete('set null');
            $table->foreign('idRaza')->references('id')->on('raza')->onDelete('set null');       
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
