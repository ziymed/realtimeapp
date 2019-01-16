<?php

use App\User;
use Faker\Generator as Faker;
use App\Question;


$factory->define(App\Reply::class, function (Faker $faker) {

    return [
        'body' => $faker->text,
        'question_id' => function(){
            return Question::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
    ];
});
