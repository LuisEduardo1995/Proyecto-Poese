<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

           
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'tipo_usuario' => $value
            ]);
         }
    }
}
