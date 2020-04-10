<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Header;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "header_name" => $faker->name,
        "img_path" => $faker->imageUrl(500, 300, $faker->randomElemen($category))
    ];
});
