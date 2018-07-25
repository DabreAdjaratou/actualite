<?php

use Faker\Generator as Faker;

$factory->define(App\Models\linfodrome_admin\Category::class, function (Faker $faker) {
    return [
        "name"=>$faker->word(10)
    ];
});
