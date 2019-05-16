<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera', function (Blueprint $table) {
            $table->string('id_carrera',10);
            $table->string('nombre_carrera',100);
            $table->string('rvoe',20);
            $table->integer('total_creditos');
            $table->date('fecha');
            $table->boolean('activo')->default('1');
            $table->timestamps();
            $table->primary('id_carrera');
        });

       /*DB::unprepared("
        CREATE TRIGGER `insertcarrera` BEFORE INSERT ON `carrera`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
       values (user(),'Administrador',now(),'INSERT','Carrera','No aplica','No aplica','No aplica')
        ");

        DB::unprepared("
        CREATE TRIGGER `updatefechacarrera` BEFORE UPDATE ON `carrera`
        FOR EACH ROW IF (NEW.fecha != OLD.fecha) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Admin','UPDATE',now(),'Carrera','Fecha',old.fecha, new.fecha);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updateidcarrera` BEFORE UPDATE ON `carrera`
        FOR EACH ROW IF (NEW.nombre_carrera != OLD.nombre_carrera) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Admin','UPDATE',now(),'Nombre Carrera','ID Carrera',old.nombre_carrera, new.nombre_carrera);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatervoe` BEFORE UPDATE ON `carrera`
        FOR EACH ROW IF (NEW.rvoe != OLD.rvoe) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Admin','UPDATE',now(),'Carrera','RVOE',old.rvoe, new.rvoe);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `deletecarrera` BEFORE DELETE ON `carrera`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
       values (user(),'Administrador',now(),'DELETE','Carrera','ID Carrera',old.id_carrera,'No aplica')
        ");

        DB::unprepared("
        CREATE TRIGGER `updateactivoc` BEFORE UPDATE ON `carrera`
        FOR EACH ROW IF (NEW.activo != OLD.activo) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','UPDATE',now(),'Carrera','Activo',old.activo, new.activo);
       END IF
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
        Schema::dropIfExists('carrera');
    }
}
