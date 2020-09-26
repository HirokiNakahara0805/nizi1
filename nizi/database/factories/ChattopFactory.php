<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chattop;
use Faker\Generator as Faker;

$factory->define(Chattop::class, function (Faker $faker) {
    return [
        //
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'subject' => $faker->realText(16),    // 16文字のテキスト
        'text' => $faker->realText(50),    // 200文字のテキスト
    ];
});