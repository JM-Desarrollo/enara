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
        'name' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'level' => $faker->numberBetween($min = 1, $max = 50),
        'exp' => $faker->numberBetween($min = 0, $max = 50),
        'gold' => $faker->numberBetween($min = 0, $max = 18),
        'diamond' => $faker->numberBetween($min = 0, $max = 18),
        'esquirla' => $faker->numberBetween($min = 0, $max = 18),
        'ptsHonor' => $faker->numberBetween($min = 0, $max = 18),
        'ptsEvent' => $faker->numberBetween($min = 0, $max = 18),
        'ptsTorneo' => $faker->numberBetween($min = 1, $max = 18),
        'idRaza' => App\Raza::all()->random()->id,
        'idClase' => App\Clase::all()->random()->id,
        'remember_token' => str_random(10),
    ];
});         

$factory->define(App\Stats::class, function (Faker\Generator $faker) use ($factory) {

    return [
            'fuerza' => $faker->numberBetween($min = 1, $max = 18),
            'agilidad'  => $faker->numberBetween($min = 1, $max = 18),
            'inteligencia' => $faker->numberBetween($min = 1, $max = 18),
            'constitucion' => $faker->numberBetween($min = 1, $max = 18),
            'stamina' => $faker->numberBetween($min = 1, $max = 18),
            'carisma' => $faker->numberBetween($min = 0, $max = 55),
            'vida'  => $faker->numberBetween($min = 100, $max = 155),
            'vidaExtra' => $faker->numberBetween($min = 0, $max = 55),
            'vidaMax' => $faker->numberBetween($min = 155, $max = 155),
            'mana' => $faker->numberBetween($min = 0, $max = 55),
            'manaExtra' => $faker->numberBetween($min = 0, $max = 55),
            'manaMax' => $faker->numberBetween($min = 55, $max = 55),
            'energia'  => $faker->numberBetween($min = 0, $max = 55),
            'energiaExtra' => $faker->numberBetween($min = 0, $max = 55),
            'energiaMax' => $faker->numberBetween($min = 0, $max = 55),
            'suerte' => $faker->numberBetween($min = 0, $max = 55),
            'evasion' => $faker->numberBetween($min = 0, $max = 55),
            'defensa' => $faker->numberBetween($min = 0, $max = 55),
            'resMagica' => $faker->numberBetween($min = 0, $max = 55),
            'probCritico' => $faker->numberBetween($min = 0, $max = 55),
            'probCritico' => $faker->numberBetween($min = 0, $max = 55),
            'dannoCritico' => $faker->numberBetween($min = 0, $max = 55),
            'bloqueo' => $faker->numberBetween($min = 0, $max = 55),
            'regVida' => $faker->numberBetween($min = 0, $max = 55),
            'regEnergia' => $faker->numberBetween($min = 0, $max = 55),
            'regMana' => $faker->numberBetween($min = 0, $max = 55),
            'iniciativa' => $faker->numberBetween($min = 0, $max = 55),
            'pesca' => $faker->numberBetween($min = 0, $max = 55),
            'mineria' => $faker->numberBetween($min = 0, $max = 55),
            'herreria' => $faker->numberBetween($min = 0, $max = 55),
            'carpinteria' => $faker->numberBetween($min = 0, $max = 55),
            'sastreria' => $faker->numberBetween($min = 0, $max = 55),
            'idUser' => App\User::all()->random()->id,
    ];
});


            