<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Carbon\Factory;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'movie_id' => factory(App\Movie::class),
        'rating' => rand(0,5),
        'review' => $faker->paragraph
    ];
});
