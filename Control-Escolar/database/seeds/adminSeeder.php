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
      $admin->username='admin';
      $admin->save();

      $admin= new administrador();
      $admin->username='robert';
      $admin->save();





    }
}
