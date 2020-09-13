<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
 
use App\Post;
use Faker\Generator as Faker;
 
$factory->define(Post::class, function (Faker $faker) {
    return [
        'created_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'updated_at' => $faker->date('Y-m-d H:i:s', 'now'),
        'year' => $faker->numberBetween(1,4),  // 1〜4のランダムな整数
        'message' => $faker->realText(200),    // 200文字のテキスト
        'name' => $faker->name,    // 氏名
        'category_id' => $faker->numberBetween(1,5),    // 1〜5のランダムな整数
    ];
});