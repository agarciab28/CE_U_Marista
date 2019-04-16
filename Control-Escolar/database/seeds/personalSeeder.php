<?php

use Illuminate\Database\Seeder;
use App\Models\personal;

class personalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('personal')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $personal=new personal();
      $personal->username='admin';
      $personal->id_persona='2';
      $personal->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $personal->ced_fiscal='gufksgeb';
      $personal->nssoc='sdgbkfhh';
      $personal->activo='1';
      $personal->save();

      $personal=new personal();
      $personal->username='robert';
      $personal->id_persona='3';
      $personal->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $personal->ced_fiscal='hhhwesd';
      $personal->nssoc='truherh';
      $personal->activo='1';
      $personal->save();

      $personal= new personal();
      $personal->username='nancy';
      $personal->id_persona='4';
      $personal->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $personal->ced_fiscal='HRUHIAS21';
      $personal->nssoc='ULLHBBH3';
      $personal->activo='1';
      $personal->save();

      $personal= new personal();
      $personal->username='ruby';
      $personal->id_persona='5';
      $personal->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $personal->ced_fiscal='IUYYHJ12';
      $personal->nssoc='POIKBH21';
      $personal->activo='1';
      $personal->save();

      $personal= new personal();
      $personal->username='moni';
      $personal->id_persona='6';
      $personal->ced_fiscal='EWRVCNJ23';
      $personal->nssoc='SDJVNR';
      $personal->activo='1';
      $personal->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $personal->save();

      $personal= new personal();
      $personal->username='nelly';
      $personal->id_persona='7';
      $personal->ced_fiscal='DFUYHY312';
      $personal->nssoc='JKFBHJS';
      $personal->activo='1';
      $personal->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $personal->save();
    }
}
