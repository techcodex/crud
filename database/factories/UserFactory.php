<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'user_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => 'asdfghj', // secret

    ];
});
$factory->define(App\Product::class,function (Faker $faker) {
    return [
        'name' => $faker->name,
        'feature' =>$faker->sentence(10),
        'description' => $faker->sentence(10),
    ];
});