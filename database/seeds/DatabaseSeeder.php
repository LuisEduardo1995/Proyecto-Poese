<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'rol',
            'permiso'
            
        ]);
        // $this->call(UsersTableSeeder::class);
    }

    protected function truncateTablas(array $tablas)
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tablas as $tabla){
            DB::table()->truncate();
        }
        //DB::statement('SET FOREIGN_KEY_CHECKES = 1;');
    }

}