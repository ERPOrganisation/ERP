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



$factory->define(App\Etablissement::class, function (Faker $faker) {
    return [
        'name' => 'ETAB'.$faker->company(),
        'state' => $faker->state(),
        'city' => $faker->city(),
        'streetName' => $faker->streetName(),
        'buildingNumber' => $faker->buildingNumber(),
        'postcode' => $faker->postcode(),
        'PhoneNumber' => $faker->e164PhoneNumber(),
        'category_id' => $faker->numberBetween(1,5),
        'latitude' => $faker->latitude(),
        'longitude' => $faker->longitude(),
    ];
});



