<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePocionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pocion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('name');
            $table->string('desc');
            $table->integer('vida');
            $table->integer('mana');
            $table->integer('exp');
            $table->integer('oro');
            $table->integer('stamina');
            $table->integer('duracion');
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
        Schema::dropIfExists('pocion');
    }
}
