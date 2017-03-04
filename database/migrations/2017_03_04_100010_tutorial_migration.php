<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TutorialMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned()->index()->nullable();
            $table->boolean('trabajo')->default(0);
            $table->boolean('entrenamiento')->default(0);
            $table->boolean('armero')->default(0);
            $table->boolean('herrero')->default(0);
            $table->boolean('alquimista')->default(0);
            $table->boolean('sastre')->default(0);
            $table->boolean('estado')->default(1);
            $table->timestamps();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorial');
    }
}
