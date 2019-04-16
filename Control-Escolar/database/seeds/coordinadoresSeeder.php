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
      $coordinador->username='moni';
      $coordinador->id_carrera='isc';
      $coordinador->save();

      $coordinador= new coordinador();
      $coordinador->username='nelly';
      $coordinador->id_carrera='arq';
      $coordinador->save();
    }
}
