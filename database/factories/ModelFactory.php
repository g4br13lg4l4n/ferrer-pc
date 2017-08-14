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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

//Crea usuario administrador
$factory->define(App\Administrator::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => 'Adinistrador',
        'email' => $faker->unique()->safeEmail('admin@ferrer.com'),
        'password' => $password ?: $password = bcrypt('sistemferrer_pass'),
        'remember_token' => str_random(10),
    ];
});
