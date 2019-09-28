<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'title' => $title,
        'slug' => Str::slug($title),
        'description' => $faker->text,
        'category' => $faker->randomElement([
            'kegiatan', 'agenda',
        ]),
        'image' => $faker->randomElement([
            'liPXbFKdbp6CpIZCo1fJeNsmwPTJp9m1e07LKR6W.jpeg',
            'QZZJWh8h5YIF4UXH9GqSGvpCUpT7QTMb5VmBn2x2.jpeg',
            'rQMPhCI7ws6573G36xT3CkGliieTsiJeOTB14It7.png',
            'Up2eBQWfFRBblkM2PEQhwJp9XtQHnTTfIiLvKWXt.jpeg',
            'yu49SxC6zgEfBWP8migg3oxCibsfLZTDhJ4T4xyj.jpeg',
        ]),
    ];
});
