<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'cedula' => '23654517',
            'nombre' => 'Luis',
            'apellido' => 'Santafe',
            'telefono' => '04241919558',
            'email' => 'santafealcala@gmail.com',
            'usuario' => 'Eduardo Alcala',
            'password' => bcrypt('123pass')
        ]);
        
        DB::table('rol')->insert([
            'tipo_usuario' => 'Administrador'
        ]);

        DB::table('usuario')->insert([
            'cedula' => '10079870',
            'nombre' => 'Yanida',
            'apellido' => 'De  Santafe',
            'telefono' => '04141273244',
            'email' => 'santafe@gmail.com',
            'usuario' => 'Yanida Alcala',
            'password' => bcrypt('123pass')
        ]);
        
        DB::table('rol')->insert([
            'tipo_usuario' => 'Usuario'
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1
        ]);

        
    }
}
