<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\Category;
use App\models\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        //
        'item_id' => $faker->unique()->ean8,
        'item_code' => $faker->unique()->ean8,
        'item_name' => $faker->words(3, true),
        'category_id' => function () {
            return Category::inRandomOrder()->first()->id;
        },
        'safety_stock' => $faker->numberBetween(10, 100),
        'received_date' => $faker->dateTimeBetween('-1 year', 'now'),
        'description' => $faker->paragraph,
    ];
});
