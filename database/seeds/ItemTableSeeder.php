<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Item::create([
            'name' => 'Escudo del Aguila',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(1).png',
            'precio' => 500,
            'levelMin' => 1,
            'habilidades' => serialize(array('defensa' => 50, 'evasion' => 30)),
 
           
       ]);
/*
       App\Item::create([
            'name' => 'Escudo de Roble',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(2).png',
            'precio' => 500,
            'levelMin' => 1,
            'defensa' => 5,
            'agilidad' => 0,
            'bloqueo' => 10,
       ]);

       App\Item::create([
            'name' => 'Escudo a Cuadros',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(3).png',
            'precio' => 500,
            'levelMin' => 1,
            'defensa' => 5,
            'agilidad' => 0,
            'bloqueo' => 10,
       ]);

       App\Item::create([
            'name' => 'Escudo de Plata',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(4).png',
            'precio' => 500,
            'levelMin' => 1,
            'defensa' => 5,
            'agilidad' => 0,
            'bloqueo' => 10,
       ]);

       App\Item::create([
            'name' => 'Escudo del Leon Negro',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(5).png',
            'precio' => 500,
            'levelMin' => 1,
            'defensa' => 5,
            'agilidad' => 0,
            'bloqueo' => 10,
       ]);

       App\Item::create([
            'name' => 'Escudo de Oro',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(6).png',
            'precio' => 500,
            'levelMin' => 1,
            'defensa' => 5,
            'agilidad' => 0,
            'bloqueo' => 10,
       ]);

       App\Item::create([
            'name' => 'Escudo de Roble Magico',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(7).png',
            'precio' => 500,
            'levelMin' => 1,
            'inteligencia' => 5,
            'defensa' => 5,
            'agilidad' => 0,
            'bloqueo' => 10,
       ]);

       App\Item::create([
            'name' => 'Escudo del Leon Orgulloso',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(8).png',
            'precio' => 500,
            'levelMin' => 1,
            'defensa' => 5,
            'agilidad' => 0,
            'bloqueo' => 10,
       ]);

      */   
    }
}

            