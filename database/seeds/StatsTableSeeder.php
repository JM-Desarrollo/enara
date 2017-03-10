<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Stats;

class StatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        factory(Stats::class)->times(5)->create();
        $estadisticas = Stats::all();

        foreach ($estadisticas as $e) {
            
            $e->idUser = $users->random()->id;

        }
    }
}
