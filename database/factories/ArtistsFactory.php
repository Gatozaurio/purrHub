<?php

use Faker\Generator as Faker;

$factory->define(App\Artist::class, function (Faker $faker) {

	$name = $faker->firstName(null) . " " . $faker->lastName();
    return [
        'name' => $name,
		'slug' => str_slug($name, "-"),
		//'image' => $faker->imageUrl($width = 640, $height = 480, 'people', true, false, '$name'),
		'image' => 'http://lorempixel.com/400/400/people/'.rand(0,10),
		'info' => $faker->words(rand(10,50), true),
		'web' => $faker->url(),
		'spotify' => 'https://www.spotify.com/es/',
		'youtube' => 'https://www.youtube.com/',
		'instagram' => 'https://www.instagram.com/',
		'twitter' => 'https://twitter.com/',
		'facebook' => 'https://www.facebook.com/'
    ];
});
