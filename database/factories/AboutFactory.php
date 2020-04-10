<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "about_name" => $faker->name,
        "description"=>$faker->sentence(),
        "img_path" => $faker->imageUrl(500, 300, $faker->randomElemen($category)),
        "description2"=>$faker->text()
    ];
});
