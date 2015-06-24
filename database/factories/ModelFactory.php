<?php

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function ($faker) {
	return [
		'title' => $faker->sentence,
		'body' => $faker->paragraph,
	];
});

$factory->define(App\Comment::class, function ($faker) {
	return [
		'content' => $faker->paragraph,
	];
});