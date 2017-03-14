<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RazaTableSeeder::class);
        $this->call(ClaseTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TrabajosTableSeeder::class);
        $this->call(StatsTableSeeder::class);
        $this->call(ItemTableSeeder::class);
    }
}
