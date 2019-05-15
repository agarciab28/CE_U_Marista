<?php

use Illuminate\Database\Seeder;
use \App\Models\alumno;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('alumno')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $alumno= new alumno();
      $alumno->ncontrol='1111';
      $alumno->id_carrera="anim";
      $alumno->num_tel_fam="3212342";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Rebecca Gómez";
      $alumno->id_persona="1";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='1234';
      $alumno->id_carrera="anim";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="8";
      $alumno->semestre="2";
      $alumno->activo="0";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='987212';
      $alumno->id_carrera="ind";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="8";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560556';
      $alumno->id_carrera="arq";
      $alumno->num_tel_fam="753139963";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="10";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560111';
      $alumno->id_carrera="der";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Saens";
      $alumno->id_persona="11";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560345';
      $alumno->id_carrera="fis";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Oblac";
      $alumno->id_persona="12";
      $alumno->semestre="1";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560987';
      $alumno->id_carrera="ind";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="13";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560376';
      $alumno->id_carrera="mer";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="14";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15561009';
      $alumno->id_carrera="neg";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="15";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560815';
      $alumno->id_carrera="for";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="16";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();


      $alumno= new alumno();
      $alumno->ncontrol='15560654';
      $alumno->id_carrera="der";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="17";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560765';
      $alumno->id_carrera="anim";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="18";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='123155604';
      $alumno->id_carrera="fis";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="19";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560348';
      $alumno->id_carrera="fis";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="20";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560619';
      $alumno->id_carrera="arq";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="21";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15562365';
      $alumno->id_carrera="der";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="22";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15569234';
      $alumno->id_carrera="fis";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="23";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15562344';
      $alumno->id_carrera="ind";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="24";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15568923';
      $alumno->id_carrera="for";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="25";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15563465';
      $alumno->id_carrera="mer";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="26";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15587643';
      $alumno->id_carrera="neg";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="27";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15560863';
      $alumno->id_carrera="neg";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="28";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='87761265';
      $alumno->id_carrera="for";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="29";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

      $alumno= new alumno();
      $alumno->ncontrol='15568993';
      $alumno->id_carrera="mer";
      $alumno->num_tel_fam="44321608";
      $alumno->plan_de_estudios="Animacion Digital-2012";
      $alumno->nombre_fam="Sandra Alieri";
      $alumno->id_persona="30";
      $alumno->semestre="2";
      $alumno->activo="1";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();

    


      

    }
}
