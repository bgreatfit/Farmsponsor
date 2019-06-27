<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\Farm::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->name,
        'slug' => Str::slug($name),
        'ip_address' => $faker->ipv4,
        'start_date' => $faker->dateTime(),
        'due_date' => $faker->dateTimeBetween('now', '+2 months'),
        'start_unit' => $units = $faker->numberBetween(20, 100),
        'units' => $units,
        'returns' => 15,
        'avatar' => $faker->image('storage/app/public/farms', 400, 400, null, false),
    ];
});
