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
        'category' => $faker->unique()->word,
        'image' => $faker->unique()->randomElement([
            'alex-kotliarskyi-QBpZGqEMsKg-unsplash.jpg',
            'blake-wisz-Xn5FbEM9564-unsplash.jpg',
            'daria-nepriakhina-xY55bL5mZAM-unsplash.jpg',
            'daria-nepriakhina-zoCDWPuiRuA-unsplash.jpg',
            'elijah-hiett-I_UU4aSPDlg-unsplash.jpg',
            'IMG_0329.jpg',
            'pablo-heimplatz-EAvS-4KnGrk-unsplash.jpg',
            'room-7TOLFyu1Dp4-unsplash.jpg',
            'you-x-ventures-MUZFKa_mttU-unsplash.jpg',
        ]),
    ];
});
