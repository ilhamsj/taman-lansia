<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text,
        'image_id' => $faker->unique()->numberBetween($min = 1, $max = 6),
    ];
});
