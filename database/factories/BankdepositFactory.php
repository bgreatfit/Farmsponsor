<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Bankdeposit::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'address' => $faker->address,
        'email' => $faker->email,
        'amount' => $faker->numberBetween(30000, 100000000),
    ];
});
