<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subscribe;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "subscribe_name" => $faker->name,
        "img_path" => $faker->imageUrl(500, 300, $faker->randomElemen($category))
    ];
});
