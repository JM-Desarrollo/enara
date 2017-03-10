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
           'inteligencia' => 0,
           'fuerza' => 2,
           'agilidad' => 0,
           'carisma' => 0,
           'constitucion' => 0,
           'img' => 'noImage'
       ]);

       App\Raza::create([
           'name' => 'Elfo',
           'desc' => 'Cuentan los viejos sabios elfos que su raza provino del sur de Enara, escapando de un terrible mal que azotaba sus tierras originarias.',
           'inteligencia' => 2,
           'fuerza' => -1,
           'agilidad' => 2,
           'carisma' => 2,
           'constitucion' => -3,
           'img' => 'noImage'
       ]);

       App\Raza::create([
           'name' => 'Enano',
           'desc' => 'Descripcion Pendiente.',
           'inteligencia' => -6,
           'fuerza' => 3,
           'agilidad' => -1,
           'carisma' => -1,
           'constitucion' => 3,
           'img' => 'noImage'
       ]);

       App\Raza::create([
           'name' => 'Gnomo',
           'desc' => 'Descripcion Pendiente.',
           'inteligencia' => 3,
           'fuerza' => -3,
           'agilidad' => 3,
           'carisma' => 1,
           'constitucion' => -4,
           'img' => 'noImage'
       ]);

       
    }
}
