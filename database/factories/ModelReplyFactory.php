<?php
use Facker\Generator as Facker;

$factory->define(App\Model\Reply::class, function (Faker\Generator $faker) {


return [
    'body' => $faker->text,
    'question_id' => function(){
        return App\Model\Question::all()->random();
    },
    'user_id' => function(){
        return App\User::all()->random();
    },
];
});

?>