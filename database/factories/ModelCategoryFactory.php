
<?php
use Facker\Generator as Facker;
$factory->define(App\Model\Category::class, function (Faker\Generator $faker) {

    $word=$faker->word;
    return [
        'name' =>$word,
        'slug' => str_slug($word),
    ];
});

?>