<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'level' => $faker->numberBetween($min = 1, $max = 50),
        'exp' => $faker->numberBetween($min = 0, $max = 10000),
        'const' => $faker->numberBetween($min = 1, $max = 18),
        'inteligencia' => $faker->numberBetween($min = 1, $max = 18),
        'fuerza' => $faker->numberBetween($min = 1, $max = 18),
        'gold' => $faker->numberBetween($min = 0, $max = 18),
        'diamond' => $faker->numberBetween($min = 0, $max = 18),
        'esquirla' => $faker->numberBetween($min = 0, $max = 18),
        'ptsHonor' => $faker->numberBetween($min = 0, $max = 18),
        'ptsEvent' => $faker->numberBetween($min = 0, $max = 18),
        'ptsTorneo' => $faker->numberBetween($min = 1, $max = 18),
        'agilidad' => $faker->numberBetween($min = 1, $max = 18),
        'carisma' => $faker->numberBetween($min = 1, $max = 18),
        'idRaza' => App\Raza::all()->random()->id,
        'idClase' => App\Clase::all()->random()->id,
        'remember_token' => str_random(10),
    ];
});         

$factory->define(App\Habilidad::class, function (Faker\Generator $faker) use ($factory) {

    return [
        'robar' => $faker->numberBetween($min = 0, $max = 55),
        'evasion' => $faker->numberBetween($min = 0, $max = 55),
        'supervivencia' => $faker->numberBetween($min = 0, $max = 55),
        'comercio' => $faker->numberBetween($min = 0, $max = 55),
        'defensa' => $faker->numberBetween($min = 0, $max = 55),
        'pesca' => $faker->numberBetween($min = 0, $max = 55),
        'mineria' => $faker->numberBetween($min = 0, $max = 55),
        'herreria' => $faker->numberBetween($min = 0, $max = 55),
        'carpinteria' => $faker->numberBetween($min = 0, $max = 55),
        'resMagica' => $faker->numberBetween($min = 0, $max = 55),
        'peleteria' => $faker->numberBetween($min = 0, $max = 55),
        'sastreria' => $faker->numberBetween($min = 0, $max = 55),
        'domesticar' => $faker->numberBetween($min = 0, $max = 55),
        'combateArms' => $faker->numberBetween($min = 0, $max = 55),
        'combateDist' => $faker->numberBetween($min = 0, $max = 55),
        'magia' => $faker->numberBetween($min = 0, $max = 100),
        'idUser' => App\User::all()->random()->id,
    ];
});