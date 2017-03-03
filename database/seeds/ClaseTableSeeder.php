<?php

use Illuminate\Database\Seeder;
use App\Clase;

class ClaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Clase::create([
           'name' => 'Mago',
           'combateArms' => 0,
           'combateDist' => 0,
           'golpeCritico' => 0,
           'domesticar' => 0,
           'resMagica' => 20,
           'resFisica' => 0,
           'supervivencia' => 0,
           'evasion' => 5,
           'robar' => 0,
           'magia' => 30
       ]);

       App\Clase::create([
           'name' => 'Guerrero',
           'combateArms' => 30,
           'combateDist' => 0,
           'golpeCritico' => 5,
           'domesticar' => 0,
           'resMagica' => 0,
           'resFisica' => 10,
           'supervivencia' => 5,
           'evasion' => 5,
           'robar' => 0,
           'magia' => 0
       ]);

       App\Clase::create([
           'name' => 'Picaro',
           'combateArms' => 15,
           'combateDist' => 0,
           'golpeCritico' => 40,
           'domesticar' => 0,
           'resMagica' => 0,
           'resFisica' => 5,
           'supervivencia' => 5,
           'evasion' => 15,
           'robar' => 30,
           'magia' => 0
       ]);

       App\Clase::create([
           'name' => 'Paladin',
           'combateArms' => 20,
           'combateDist' => 0,
           'golpeCritico' => 5,
           'domesticar' => 0,
           'resMagica' => 0,
           'resFisica' => 10,
           'supervivencia' => 0,
           'evasion' => 5,
           'robar' => 0,
           'magia' => 10
       ]);

       App\Clase::create([
           'name' => 'Clerigo',
           'combateArms' => 15,
           'combateDist' => 0,
           'golpeCritico' => 0,
           'domesticar' => 0,
           'resMagica' => 5,
           'resFisica' => 5,
           'supervivencia' => 10,
           'evasion' => 0,
           'robar' => 0,
           'magia' => 10
       ]);

       App\Clase::create([
           'name' => 'Arquero',
           'combateArms' => 0,
           'combateDist' => 35,
           'golpeCritico' => 25,
           'domesticar' => 5,
           'resMagica' => 0,
           'resFisica' => 2,
           'supervivencia' => 20,
           'evasion' => 30,
           'robar' => 2,
           'magia' => 0
       ]);

       App\Clase::create([
           'name' => 'Cazador',
           'combateArms' => 0,
           'combateDist' => 25,
           'golpeCritico' => 15,
           'domesticar' => 30,
           'resMagica' => 0,
           'resFisica' => 2,
           'supervivencia' => 40,
           'evasion' => 20,
           'robar' => 0,
           'magia' => 5
       ]);
    }
}
