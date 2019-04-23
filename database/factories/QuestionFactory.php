<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
      'title'=>rtrim($faker->sentence(rand(5,10)),"."),
      'body'=>$faker->paragraphs(rand(5,7),true), 
      'views'=>$faker->rand(0,10),
      'answers'=>$faker->rand(0,10),
      'votes'=>$faker->rand(0,10),

    ];
});
