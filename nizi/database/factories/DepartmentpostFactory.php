<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Departmentpost;

$factory->define(Departmentpost::class, function (Faker $faker) {
    return [
        //
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'message' => $faker->realText(200),    // 200文字のテキスト
        'name' => $faker->name,    // 氏名
        'departmentcategory_id' => $faker->numberBetween(1,5),    // 1〜5のランダムな整数
    ];
});