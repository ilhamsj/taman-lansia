<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'alt' => $faker->word,
        'url' => $faker->unique()->randomElement([
            'alex-kotliarskyi-QBpZGqEMsKg-unsplash.jpg',
            'blake-wisz-Xn5FbEM9564-unsplash.jpg',
            'daria-nepriakhina-xY55bL5mZAM-unsplash.jpg',
            'daria-nepriakhina-zoCDWPuiRuA-unsplash.jpg',
            'elijah-hiett-I_UU4aSPDlg-unsplash.jpg',
            'IMG_0329.jpg',
            'pablo-heimplatz-EAvS-4KnGrk-unsplash.jpg',
            'photo-1508963493744-76fce69379c0.jpg',
            'room-7TOLFyu1Dp4-unsplash.jpg',
            'you-x-ventures-MUZFKa_mttU-unsplash.jpg',
        ]),
    ];
});