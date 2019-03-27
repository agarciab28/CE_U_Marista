<?php

use Illuminate\Database\Seeder;
use \App\Models\persona;

class personasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('persona')->truncate();
      DB::statement('set foreign_key_checks = 1;');

        $persona= new persona();
        $persona->rol='alumno';
        $persona->nombres='Pepe';
        $persona->apaterno='Robles';
        $persona->amaterno='Padilla';
        $persona->fnaci='1996-12-12';
        $persona->sexo='M';
        $persona->email='Pepe@example.example.com';
        $persona->calle='Pino Suarez';
        $persona->num_int='43';
        $persona->num_ext='10';
        $persona->colonia='Cantera';
        $persona->codigo_postal='58023';
        $persona->ciudad='Morelia';
        $persona->estado='Michoacan';
        $persona->num_tel='443333333';
        $persona->num_cel='443412121';
        $persona->save();

        $persona= new persona();
        $persona->rol='Admin';
        $persona->nombres='Diego';
        $persona->apaterno='Ramirez';
        $persona->amaterno='Rodriguez';
        $persona->fnaci='1997-12-12';
        $persona->sexo='M';
        $persona->email='Diego@example.example.com';
        $persona->calle='Pino Suarez';
        $persona->num_int='44';
        $persona->num_ext='18';
        $persona->colonia='Cantera';
        $persona->codigo_postal='58023';
        $persona->ciudad='Morelia';
        $persona->estado='Michoacan';
        $persona->num_tel='443333333';
        $persona->num_cel='443412121';
        $persona->save();




    }
}
