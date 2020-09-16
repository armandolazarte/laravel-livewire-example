<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titulo'    => $faker->sentence(2),
        'contenido' => $faker->realText(500),
        'user_id'   => rand(1, 101) //factory(User::class)->create()->id
    ];
});
