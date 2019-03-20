<?php

use Illuminate\Database\Seeder;
use  \App\Models\administrador;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('administrador')->truncate();
      DB::statement('set foreign_key_checks = 1;');

        $admin= new administrador();
        $admin->id_admin='admin';
        $admin->activo='1';
        $admin->id_persona='2';
        $admin->password=bcrypt('secret');
        $admin->save();





    }
}
