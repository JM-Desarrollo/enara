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
           'fuerza' => 1,
           'agilidad' => 1,
           'carisma' => 0,
           'constitucion' => 2,
           'img' => 'noImage'
       ]);
    }
}
