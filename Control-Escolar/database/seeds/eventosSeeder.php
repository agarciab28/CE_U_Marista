<?php

use Illuminate\Database\Seeder;
use App\Models\evento;

class eventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('evento')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $evento= new evento();
      $evento->titulo="End game";
      $evento->fecha_inicio="2019-4-26";
      $evento->fecha_final="2019-4-28";
      $evento->color="green";
      $evento->save();
    }
}
