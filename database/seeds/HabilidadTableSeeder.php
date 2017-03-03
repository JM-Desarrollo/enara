<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Habilidad;

class HabilidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        factory(Habilidad::class)->times(20)->create();
        $habilidades = Habilidad::all();

        foreach ($habilidades as $habilidad) {
            
            $habilidad->idUser = $users->random()->id;

        }
    }
}
