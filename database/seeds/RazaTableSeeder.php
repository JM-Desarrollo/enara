<?php

use Illuminate\Database\Seeder;
use App\Database\Eloquent\Model;
use App\Raza;

class RazaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Raza::create([
           'name' => 'Humano',
           'desc' => 'Los humanos son la raza más joven, inmaduros y rebeldes por lo que no son tan inteligentes como otras razas.',
           'inteligencia' => 1,
           'fuerza' => 1,
           'agilidad' => -1,
           'carisma' => 0,
           'constitucion' => 2,
           'img' => 'images/registro/humanoOFF.jpg'
       ]);

       App\Raza::create([
           'name' => 'Elfo',
           'desc' => 'Cuentan los viejos sabios elfos que su raza provino del sur de Enara, escapando de un terrible mal que azotaba sus tierras originarias.',
           'inteligencia' => 2,
           'fuerza' => 0,
           'agilidad' => 2,
           'carisma' => 0,
           'constitucion' => -1,
           'img' => 'images/registro/elfoOFF.jpg'
       ]);

       App\Raza::create([
           'name' => 'Enano',
           'desc' => 'Descripcion Pendiente.',
           'inteligencia' => -3,
           'fuerza' => 2,
           'agilidad' => 1,
           'carisma' => 1,
           'constitucion' => 2,
           'img' => 'images/registro/enanoOFF.jpg'
       ]);

       App\Raza::create([
           'name' => 'Effyn',
           'desc' => 'Las effyn son unas humanoides que viven en los bosques, en esta raza no existen los generos, la misma se destaca por su inteligencia.',
           'inteligencia' => 2,
           'fuerza' => -1,
           'agilidad' => 1,
           'carisma' => 0,
           'constitucion' => 1,
           'img' => 'images/registro/effynOFF.jpg'
       ]);

       
    }
}
