<?php

use Illuminate\Database\Seeder;

class TrabajosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Trabajos::create([
           'name' => 'Ayudante de Pesca' ,
           'paga' => 10
       ]);

       App\Trabajos::create([
           'name' => 'Ayudante de Herreria' ,
           'paga' => 15
       ]);
    }
}
