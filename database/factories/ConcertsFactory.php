<?php

use Faker\Generator as Faker;

$factory->define(App\Concert::class, function (Faker $faker) {
	$name = $faker->firstName(null) . " " . $faker->lastName();
    return [
		'name' =>  $name,
		'slug' => str_slug($name, "-"),
		'price' => $faker->randomFloat(2, 0, 130),
		'city' => $faker->city,
		'location' => $faker->cityPrefix . " " . $faker->streetSuffix,
		'address' => $faker->address,
		'date' => $faker->date('Y-m-d'),
		'schedule' => $faker->time('H:i:s'),
		'ticket' => $faker->url,
		'info' => $faker->words(rand(10,50), true)
    ];
});
