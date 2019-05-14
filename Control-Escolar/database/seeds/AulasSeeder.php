<?php

use Illuminate\Database\Seeder;
use App\Models\aula;

class AulasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('aula')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $aula= new aula();
      $aula->aula='5';
      $aula->edificio='k';
      $aula->tipo='salón';
      $aula->save();

      $aula= new aula();
      $aula->aula='LTW';
      $aula->edificio='i';
      $aula->tipo='Laboratorio';
      $aula->save();
    }


}
