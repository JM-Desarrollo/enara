<?php

use Illuminate\Database\Seeder;
use App\Clase;
use App\Raza;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $clases = Clase::all();
        $razas = Raza::all();
        $usuarios = factory(App\User::class, 20)->create();

        foreach ($usuarios as $usuario) {
           $usuario->idClase =  $clases->random()->id;
           $usuario->idRaza = $razas->random()->id; 
        }
    }
}
