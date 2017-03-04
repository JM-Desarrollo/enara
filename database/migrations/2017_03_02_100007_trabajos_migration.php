<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrabajosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('paga');
            $table->integer('recPos')->nullable(); // Recomensa secundaria
            $table->integer('recChance')->nullable(); // Posibilidad de conseguir esa recompensa
            $table->integer('habNec')->nullable(); // Habilidad necesaria para realizar el trabajo
            $table->integer('habMin')->nullable(); // Habilidad minima de esa habilidad para poder realizarlo
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
        Schema::dropIfExists('trabajo');
    }
}
