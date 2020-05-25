<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\models\admin\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'responsabilidad' => $faker->word,
    ];
});
