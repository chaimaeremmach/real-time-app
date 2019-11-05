<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
/*

$factory->define(App\Model\Question::class, function (Faker\Generator $faker) {
    $title=$faker->sentence;

    return [
        'title' => $title,
        'slug' => str_slug($title),
        'category_id' => function(){
            return Category::all()->random();
        },
        'user_id' => function(){
            return App\User::all()->random();
        },
    ];
});


$factory->define(App\Model\Reply::class, function (Faker\Generator $faker) {


    return [
        'body' => $factory->text,
        'question_id' => function(){
            return Question::all()->random();
        },
        'user_id' => function(){
            return App\User::all()->random();
        },
    ];
});


$factory->define(App\Model\Category::class, function (Faker\Generator $faker) {

    $word=$facker->word;
    return [
        'name' =>word,
        'slug' => str_slug($word),
    ];
});

$factory->define(App\Model\Like::class, function (Faker\Generator $faker) {

    $word=$facker->word;
    return [
        'user_id' => function(){
            return App\User::all()->random();
        },
    ];
});*/