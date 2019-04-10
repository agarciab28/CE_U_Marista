<?php

use Illuminate\Database\Seeder;
use \App\Models\coordinador;


class coordinadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('coordinador')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $coordinador= new coordinador();
      $coordinador->id_coordinador='moni';
      $coordinador->id_carrera='isc';
      $coordinador->id_persona='6';
      $coordinador->ced_fiscal='EWRVCNJ23';
      $coordinador->nssoc='SDJVNR';
      $coordinador->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $coordinador->save();

      $coordinador= new coordinador();
      $coordinador->id_coordinador='nelly';
      $coordinador->id_carrera='arq';
      $coordinador->id_persona='7';
      $coordinador->ced_fiscal='DFUYHY312';
      $coordinador->nssoc='JKFBHJS';
      $coordinador->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $coordinador->save();
    }
}
