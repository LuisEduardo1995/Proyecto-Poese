<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Support\Str;
use App\models\seguridad\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        
        
        'cedula' => $faker->name,
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'telefono' => $faker->title,
        'email' => $faker->unique()->safeEmail,
        'usuario' => $faker->name,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    ];
});
