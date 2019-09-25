<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'alt' => $faker->word,
        // 'url' => $faker->imageUrl($width = 640, $height = 480),
        'url' => $faker->unique()->randomElement([
            '7KJbSD3cOsXEkOVj4fY4PfMrZXiC7XVp0u6muG7j.jpeg',
            'EFWhuETLX5Nrgr8wBu9Rul4nUw2a6y0YkI6pWEWX.jpeg',
            'JWhyvKOP9XUvRiAfQvQtTHVyjH215HKf2u9reemC.jpeg',
            'm0JeJpMjxXDtqlr2Z5wGUGWDQDJXhPCsfqXUVPRM.jpeg',
            'PfG2KLU3NdswNWZbGYgL2FKGFDTQ1kYxq1mALZeC.gif',
            't3XyudpgLgBKjyJpy2oE9G6KDnmckXL9VMyD1z38.jpeg',
        ]),
    ];
});