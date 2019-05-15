<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCalificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->string('ncontrol',10);
            $table->integer('id_grupo')->unsigned();
            $table->float('primer_parcial',8,2);
            $table->float('segundo_parcial',8,2);
            $table->float('examen_final',8,2);
            $table->integer('faltas_primer')->nullable();
            $table->integer('faltas_segundo')->nullable();
            $table->integer('faltas_tercer')->nullable();
            $table->integer('total_faltas')->nullable();
            $table->float('promedio_calificacion',8,2)->nullable();
            $table->string('opcion_calificacion',10);
            $table->timestamps();
            $table->foreign('id_grupo')->references('id_grupo')->on('grupo');
            $table->foreign('ncontrol')->references('ncontrol')->on('alumno')->onUpdate('cascade');
        });

        /* DB::unprepared("
        CREATE TRIGGER `updateprimerp` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.primer_parcial != OLD.primer_parcial) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Primer Parcial',old.primer_parcial, new.primer_parcial);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatesegundop` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.segundo_parcial != OLD.segundo_parcial) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Segundo Parcial',old.segundo_parcial, new.segundo_parcial);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updateexamenfinal` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.examen_final != OLD.examen_final) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Examen Final',old.examen_final, new.examen_final);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatefaltasprimer` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.faltas_primer != OLD.faltas_primer) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Faltas Primer',old.faltas_primer, new.faltas_primer);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatefaltasegundo` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.faltas_segundo != OLD.faltas_segundo) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Faltas Segundo',old.faltas_segundo, new.faltas_segundo);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatefaltastercer` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.faltas_tercer != OLD.faltas_tercer) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Faltas Tercer',old.faltas_tercer, new.faltas_tercer);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatepromediofaltas` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.promedio_faltas != OLD.promedio_faltas) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Promedio Faltas',old.promedio_faltas, new.promedio_faltas);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatepromediocalif` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.promedio_calificacion != OLD.promedio_calificacion) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Promedio Calificacion',old.promedio_calificacion, new.promedio_calificacion);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updateopcioncalif` BEFORE UPDATE ON `calificaciones`
        FOR EACH ROW IF (NEW.opcion_calificacion != OLD.opcion_calificacion) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Profesor','UPDATE',now(),'Calificaciones','Opcion Calificacion',old.opcion_calificacion, new.opcion_calificacion);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `insertcalif` BEFORE INSERT ON `calificaciones`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
       values (user(),'Profesor',now(),'INSERT','Calificaciones','No aplica','No aplica','No aplica')

        ");

        DB::unprepared("
        CREATE TRIGGER `deletecalif` BEFORE DELETE ON `calificaciones`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
        values (user(),'Profesor',now(),'DELETE','Calificaciones','Numero de Control',old.ncontrol,'No aplica')

        ");
 */


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
}
