<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Ad::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'title' => $faker->sentence,
        'user_id' => factory(App\User::class)->create()->id
    ];
});
