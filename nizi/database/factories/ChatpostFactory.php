<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chatpost;
use Faker\Generator as Faker;

$factory->define(Chatpost::class, function (Faker $faker) {
    return [
        //
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'message' => $faker->realText(100),    // 200文字のテキスト
        'name' => $faker->name,    // 氏名
        'chattop_id' => $faker->numberBetween(1,10),    // 1〜5のランダムな整数
    ];
});