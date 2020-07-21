<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    $input = array('Rambo','Cars','Broce Lee','Madagascar');
    $rand =array_rand($input,1);
    return [
        'movie'=> $input[$rand]
    ];
});
