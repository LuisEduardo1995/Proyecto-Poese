<?php

use App\models\seguridad\Usuario;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class, 50)->create()->each(function ($usuario) {
            $usuario->posts()->save(factory(App\models\seguridad\Usuario::class)->make());
        });
    }
}
