<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [

            'administrador',
            'apc',
            'tutor',
            'comisionado',
            'responsable',
            'encargado'
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'tipo_usuario' => $value
            ]);
         }
    }
}
