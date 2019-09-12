<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        // 'url' => $faker->imageUrl($width = 640, $height = 480),
        'url' => 'holder.js/1280x960?auto=yes&textmode=exact&random=yes',
    ];
});