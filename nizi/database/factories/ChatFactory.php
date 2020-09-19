<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Chat;

$factory->define(Chat::class, function (Faker $faker) {
    return [
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'message' => $faker->realText(200),    // 200文字のテキスト
        'name' => $faker->name,    // 氏名
    ];
});
