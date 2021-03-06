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
            $table->enum('calidad', ['comun', 'raro', 'epico', 'legendario', 'mistico']);
            $table->integer('precio')->default(1);
            $table->integer('levelMin')->default(1);
            $table->text('habilidades')->nullable();
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
