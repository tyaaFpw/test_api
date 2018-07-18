<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
    	'prod_id' => function(){
    	// 	// return Product::all()->random();
    	// 	// $prodIds = User::all()->pluck('id')->toArray();
    	// 	// 'prod_id' => $faker->randomElement($prodIds) 
    		return factory(App\Model\Product::class)->create()->id;
    	},
    	// $prodIds = Product::all()->pluck('id')->toArray();
    	// 'prod_id' => $faker->randomElement(Product::all()->pluck('id')->toArray()), 
    	'customer' => $faker->name,
    	'review' => $faker->paragraph,
    	'star' => $faker->numberBetween(0,5)
    ];
});
