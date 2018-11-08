<?php

use Faker\Generator as Faker;

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

$factory->define(App\Models\KhachLuuTru::class, function (Faker $faker) {
    return [
        'ho_ten' => $faker->name,
        'cmnd' => str_random(10),
        'dien_thoai' => str_random(10), // secret
        'dia_chi' => str_random(10),
        'phong_id' => 1,
        'loai_khach_id' => 1
    ];
});
