<?php

/**
 * Users Factory
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/**
 * Tweets Factory
 */
$factory->define(App\Tweet::class, function (Faker\Generator $faker) {
    return [
        'text' => $faker->text(140),
        'user_id' => rand(1, 100),
        'liked' => false,
    ];
});
