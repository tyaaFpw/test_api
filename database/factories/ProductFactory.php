<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
    	'prod_name' => $faker->word,
    	'prod_price' => $faker->numberBetween(100,1000),
    	'prod_stock' => $faker->randomDigit,
    	'prod_type' => $faker->word,
    	'prod_desc' => $faker->paragraph,
    	'prod_discount' => $faker->numberBetween(2,30),
    ];
});
