<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->string('ncontrol',10);
            $table->string('id_carrera',10);
            $table->string('plan_de_estudios');
            $table->integer('semestre',false,false)->unsigned();
            $table->string('num_tel_fam',20)->nullable();
            $table->string('nombre_fam',50)->nullable();
            $table->integer('id_persona')->unsigned();
            $table->text('password');
            $table->boolean('activo');
            $table->timestamps();
            $table->primary('ncontrol')->onUpdate('cascade');;
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera')->onUpdate('cascade');
            $table->foreign('id_persona')->references('id_persona')->on('persona')->onUpdate('cascade');
        });

         DB::unprepared("
        CREATE TRIGGER `updatesemestre` BEFORE UPDATE ON `alumno`
        FOR EACH ROW IF (NEW.semestre != OLD.semestre) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Alumno','ACTUALIZACION',now(),'Alumno','Semestre',old.semestre, new.semestre);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updateplan` BEFORE UPDATE ON `alumno`
        FOR EACH ROW IF (NEW.plan_de_estudios != OLD.plan_de_estudios) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Alumno','ACTUALIZACION',now(),'Alumno','Plan de Estudios',old.plan_de_estudios, new.plan_de_estudios);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatenumtelfam` BEFORE UPDATE ON `alumno`
        FOR EACH ROW IF (NEW.num_tel_fam != OLD.num_tel_fam) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Alumno','ACTUALIZACION',now(),'Alumno','Numero de telefono de Familiar',old.num_tel_fam, new.num_tel_fam);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatepassword` BEFORE UPDATE ON `alumno`
        FOR EACH ROW IF (NEW.password != OLD.password) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Alumno','ACTUALIZACION',now(),'Alumno','Contraseña',old.password, new.password);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updateidpersona` BEFORE UPDATE ON `alumno`
        FOR EACH ROW IF (NEW.id_persona != OLD.id_persona) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Alumno','ACTUALIZACION',now(),'Alumno','ID Persona',old.id_persona, new.id_persona);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatencontrol` BEFORE UPDATE ON `alumno`
        FOR EACH ROW IF (NEW.ncontrol != OLD.ncontrol) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Alumno','ACTUALIZACION',now(),'Alumno','Numero de control',old.ncontrol, new.ncontrol);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatenombrefam` BEFORE UPDATE ON `alumno`
        FOR EACH ROW IF (NEW.nombre_fam != OLD.nombre_fam) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Alumno','ACTUALIZACION',now(),'Alumno','Nombre Familiar',old.nombre_fam, new.nombre_fam);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatecarrera` BEFORE UPDATE ON `alumno`
        FOR EACH ROW IF (NEW.id_carrera != OLD.id_carrera) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Alumno','ACTUALIZACION',now(),'Alumno','Carrera',old.id_carrera, new.id_carrera);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `insertalumno` BEFORE INSERT ON `alumno`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
       values (user(),'Alumno',now(),'INSERCION','Alumno','No aplica','No aplica','No aplica')
        ");

        DB::unprepared("
        CREATE TRIGGER `deletealumno` BEFORE DELETE ON `alumno`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
        values (user(),'Administrador',now(),'ELIMINACION','Alumno','ID Persona',old.id_persona,'No aplica')
        ");
 
     
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
