<?php

use Facker\Generator as Facker;
$factory->define(App\Model\Like::class, function (Faker\Generator $faker) {

$word=$faker->word;
return [
    'user_id' => function(){
        return App\User::all()->random();
    },
];
});

?>