<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->increments('id_grupo');
            $table->string('seccion');
            $table->string('id_carrera',10);
            $table->string('id_materia',18);
            $table->integer('id_prof')->unsigned();
            $table->string('periodo');
            $table->boolean('check_calif')->default('0');
            $table->boolean('activo')->default('1');
            $table->timestamps();

            $table->foreign('id_prof')->references('id_prof')->on('profesor');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('id_materia')->references('id_materia')->on('materia');
        });

        DB::unprepared("
        CREATE TRIGGER `insertgrupo` BEFORE INSERT ON `grupo`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
        values (user(),'Administrador',now(),'INSERCION','Grupo','No aplica','No aplica','No aplica')
            
        ");

        DB::unprepared("
        CREATE TRIGGER `deletegrupo` BEFORE DELETE ON `grupo`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
        values (user(),'Administrador',now(),'ELIMINACION','Grupo','ID Grupo',old.id_grupo,'No aplica')
            
        ");

        DB::unprepared("
        CREATE TRIGGER `updateidgrupo` BEFORE UPDATE ON `grupo`
        FOR EACH ROW IF (NEW.id_grupo != OLD.id_grupo) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Grupo','ID Grupo',old.id_grupo, new.id_grupo);
       END IF   
        ");

        DB::unprepared("
        CREATE TRIGGER `updateseccion` BEFORE UPDATE ON `grupo`
        FOR EACH ROW IF (NEW.seccion != OLD.seccion) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Grupo','Seccion',old.seccion, new.seccion);
       END IF    
        ");

        DB::unprepared("
        CREATE TRIGGER `updateidcarrerag` BEFORE UPDATE ON `grupo`
        FOR EACH ROW IF (NEW.id_carrera != OLD.id_carrera) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Grupo','ID Carrera',old.id_carrera, new.id_carrera);
       END IF   
        ");

        DB::unprepared("
        CREATE TRIGGER `updateidmateriag` BEFORE UPDATE ON `grupo`
        FOR EACH ROW IF (NEW.id_materia != OLD.id_materia) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Grupo','ID Materia',old.id_materia, new.id_materia);
       END IF   
        ");

        DB::unprepared("
        CREATE TRIGGER `updateidprof` BEFORE UPDATE ON `grupo`
        FOR EACH ROW IF (NEW.id_prof != OLD.id_prof) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Grupo','ID Profesor',old.id_prof, new.id_prof);
       END IF    
        ");

        DB::unprepared("
        CREATE TRIGGER `updateperiodog` BEFORE UPDATE ON `grupo`
        FOR EACH ROW IF (NEW.periodo != OLD.periodo) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Grupo','Periodo',old.periodo, new.periodo);
       END IF    
        ");

        DB::unprepared("
        CREATE TRIGGER `updateactivog` BEFORE UPDATE ON `grupo`
        FOR EACH ROW IF (NEW.activo != OLD.activo) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Grupo','Periodo',old.activo, new.activo);
       END IF   
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo');
    }
}
