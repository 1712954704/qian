<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\LabUsers;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(LabUsers::class, function (Faker $faker) {
    return [
        'uid' => $faker->numberBetween(0, 999999999),//生成随机整数，范围是0-100之间
        'ip' =>  $faker->randomFloat(2, 0, 999), //生成浮点数，两位小数点，范围是0-10之间
        'nickname' => $faker->name(),//参数：name($gender = null|'male'|'female') .返回姓名
        'avatar' => $faker->buildingNumber,//建筑物编号
        'sex' => $faker->randomElement([0, 1]), //随机返回数组中的一个元素,
        'city' => $faker->city, //城市
        'updated_at' =>  $faker->dateTimeThisYear,//返回一个前一年内的DateTime对象
        'created_at' =>  $faker->dateTimeThisYear,//返回一个前一年内的DateTime对象
        'deleted_at' =>  $faker->dateTimeThisYear,//返回一个前一年内的DateTime对象
    ];
});
