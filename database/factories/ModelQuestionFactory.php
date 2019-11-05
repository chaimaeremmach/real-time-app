<?php
use Facker\Generator as Facker;
$factory->define(App\Model\Question::class, function (Faker\Generator $faker) {
    $title=$faker->sentence;

    return [
        'title' => $title,
        'slug' => str_slug($title),
        'body'=>$faker->text,
        'category_id' => function(){
            return App\Model\Category::all()->random();
        },
        'user_id' => function(){
            return App\User::all()->random();
        },
    ];
});

?>
