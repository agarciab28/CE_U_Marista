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
        $persona->curp='xxxxxxxxxxxxxxxxxx';
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
        $persona->imagen='jumtest.jpg';
        $persona->save();

        $persona= new persona();
        $persona->rol='Admin';
        $persona->nombres='Diego';
        $persona->apaterno='Ramirez';
        $persona->amaterno='Rodriguez';
        $persona->fnaci='1997-12-12';
        $persona->curp='xxxxxxxxxxxxxxxxxy';
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
        $persona->imagen='jumtest.jpg';
        $persona->save();

        $persona= new persona();
        $persona->rol='Admin';
        $persona->nombres='Roberto';
        $persona->apaterno='Gonzalez';
        $persona->amaterno='Rodriguez';
        $persona->fnaci='1992-7-10';
        $persona->curp='xxxxxxxxxxxxxxxxyy';
        $persona->sexo='M';
        $persona->email='roberto@example.example.com';
        $persona->calle='Mango';
        $persona->num_int='4';
        $persona->num_ext='19';
        $persona->colonia='Xangari';
        $persona->codigo_postal='58058';
        $persona->ciudad='Morelia';
        $persona->estado='Michoacan';
        $persona->num_tel='443223233';
        $persona->num_cel='443444121';
        $persona->imagen='jumtest.jpg';
        $persona->save();


        $persona= new persona();
        $persona->rol='Prof';
        $persona->nombres='Nancy';
        $persona->apaterno='Martinez';
        $persona->amaterno='Gil';
        $persona->fnaci='1994-7-10';
        $persona->curp='xxxxxxxxxxxxxxxyyy';
        $persona->sexo='F';
        $persona->email='nancy@example.example.com';
        $persona->calle='Ruby';
        $persona->num_int='3';
        $persona->num_ext='19';
        $persona->colonia='On Rails';
        $persona->codigo_postal='58010';
        $persona->ciudad='Morelia';
        $persona->estado='Michoacan';
        $persona->num_tel='443223233';
        $persona->num_cel='443444121';
        $persona->imagen='jumtest.jpg';
        $persona->save();

        $persona= new persona();
        $persona->rol='Prof';
        $persona->nombres='Rubén';
        $persona->apaterno='Regil';
        $persona->amaterno='Tecla';
        $persona->fnaci='1994-7-10';
        $persona->curp='xxxxxxxxxxxxxxyyyy';
        $persona->sexo='M';
        $persona->email='ruby@example.example.com';
        $persona->calle='Parangaricutirimicuaro';
        $persona->num_int='56';
        $persona->num_ext='91';
        $persona->colonia='Mexico';
        $persona->codigo_postal='58013';
        $persona->ciudad='Morelia';
        $persona->estado='Michoacan';
        $persona->num_tel='443223233';
        $persona->num_cel='443444121';
        $persona->imagen='jumtest.jpg';
        $persona->save();

        $persona= new persona();
        $persona->rol='Coord';
        $persona->nombres='Monica';
        $persona->apaterno='Mordisco';
        $persona->amaterno='Gomez';
        $persona->fnaci='1970-1-4';
        $persona->curp='xxxxxxxxxxxxxyyyyy';
        $persona->sexo='F';
        $persona->email='moni@example.example.com';
        $persona->calle='Fuerza';
        $persona->num_int='134';
        $persona->num_ext='8';
        $persona->colonia='Mexico';
        $persona->codigo_postal='58016';
        $persona->ciudad='Morelia';
        $persona->estado='Michoacan';
        $persona->num_tel='443223233';
        $persona->num_cel='443444121';
        $persona->imagen='jumtest.jpg';
        $persona->save();

        $persona= new persona();
        $persona->rol='Coord';
        $persona->nombres='Nelly';
        $persona->apaterno='Aguilar';
        $persona->amaterno='Ramirez';
        $persona->fnaci='1964-6-4';
        $persona->curp='xxxxxxxxxxxxyyyyyy';
        $persona->sexo='F';
        $persona->email='nelly@example.example.com';
        $persona->calle='Gloria';
        $persona->num_int='14';
        $persona->num_ext='56';
        $persona->colonia='Mexico';
        $persona->codigo_postal='56016';
        $persona->ciudad='Morelia';
        $persona->estado='Michoacan';
        $persona->num_tel='443223233';
        $persona->num_cel='443444121';
        $persona->imagen='jumtest.jpg';
        $persona->save();

        $persona= new persona();
        $persona->rol='alumno';
        $persona->nombres='Javier';
        $persona->apaterno='Perez';
        $persona->amaterno='Santos';
        $persona->curp='yyxxxxxxxxxxxxxxxx';
        $persona->fnaci='1996-8-12';
        $persona->sexo='M';
        $persona->email='Javier@example.example.com';
        $persona->calle='Independencia';
        $persona->num_int='503';
        $persona->num_ext='503';
        $persona->colonia='Revolucion';
        $persona->codigo_postal='58337';
        $persona->ciudad='Morelia';
        $persona->estado='Michoacan';
        $persona->num_tel='443321313';
        $persona->num_cel='443321121';
        $persona->imagen='jumtest.jpg';
        $persona->save();

    }
}
