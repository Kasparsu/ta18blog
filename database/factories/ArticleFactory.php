<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {

    return [
        "title" => $faker->words(3, true),
        "body" => $faker->paragraphs(3, true)
    ];
});