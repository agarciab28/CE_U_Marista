<?php

use Illuminate\Database\Seeder;
use \App\Models\profesor;
use Illuminate\Support\Facades\Hash;

class profesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('profesor')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $profesor= new profesor();
      $profesor->username='nancy';
      $profesor->especialidad='Ventas';
      $profesor->activo='1';
      $profesor->save();

      $profesor= new profesor();
      $profesor->username='ruby';
      $profesor->especialidad='Ventas';
      $profesor->activo='1';
      $profesor->save();

    }
}
