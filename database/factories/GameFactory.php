<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        //

        'title' => $faker->sentence(3),
        'description' => $faker->paragraph(3),
       // 'image' => $faker->imageUrl(640, 480, 'games', true),
        'platform' => $faker->randomElement(['PS4', 'Xbox', 'PC']),
        'genre' => $faker->randomElement(['Action', 'Adventure', 'RPG', 'Strategy']),
        'release_date' => $faker->date(),
        'developer' => $faker->company,
        'rating' => $faker->randomElement(['E', 'E10+', 'T', 'M']),
        'price' => $faker->randomFloat(2, 1, 200),
    ];
});
