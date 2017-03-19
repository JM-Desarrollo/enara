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
            'habilidades' => implode(',', array('defensa', 50, 'evasion', 30)),
       ]);

       App\Item::create([
            'name' => 'Escudo de Roble',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(2).png',
            'precio' => 500,
            'levelMin' => 1,
            'habilidades' => implode(',', array('defensa', 62, 'evasion', 56)),
       ]);

       App\Item::create([
            'name' => 'Escudo a Cuadros',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(3).png',
            'precio' => 500,
            'levelMin' => 1,
            'habilidades' => implode(',', array('defensa', 70, 'evasion', 37)),
       ]);

       App\Item::create([
            'name' => 'Escudo de Plata',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(4).png',
            'precio' => 500,
            'levelMin' => 23,
            'habilidades' => implode(',', array('defensa', 29, 'evasion', 38)),
       ]);

       App\Item::create([
            'name' => 'Escudo del Leon Negro',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(5).png',
            'precio' => 500,
            'levelMin' => 15,
            'habilidades' => implode(',', array('defensa', 30, 'evasion', 50)),
       ]);

       App\Item::create([
            'name' => 'Escudo de Oro',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(6).png',
            'precio' => 500,
            'levelMin' => 5,
            'habilidades' => implode(',', array('defensa', 80, 'evasion', 20)),
       ]);

       App\Item::create([
            'name' => 'Escudo de Roble Magico',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(7).png',
            'precio' => 500,
            'levelMin' => 5,
            'habilidades' => implode(',', array('defensa', 56, 'evasion', 39)),
       ]);

       App\Item::create([
            'name' => 'Escudo del Leon Orgulloso',
            'tipo' => 'escudo',
            'img' => 'images/items/escudos/escudo_(8).png',
            'precio' => 500,
            'levelMin' => 10,
            'habilidades' => implode(',', array('defensa', 70, 'evasion', 12)),
       ]);

    }
}

            