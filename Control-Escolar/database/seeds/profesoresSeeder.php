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
      $profesor->id_prof='nancy';
      $profesor->id_persona='4';
      $profesor->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $profesor->especialidad='Ventas';
      $profesor->ced_fiscal='HRUHIAS21';
      $profesor->nssoc='ULLHBBH3';
      $profesor->save();

      $profesor= new profesor();
      $profesor->id_prof='ruby';
      $profesor->id_persona='5';
      $profesor->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $profesor->especialidad='Ventas';
      $profesor->ced_fiscal='IUYYHJ12';
      $profesor->nssoc='POIKBH21';
      $profesor->save();

    }
}
