<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aula', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aula',20)->unique();
            $table->string('edificio');
            $table->string('tipo');
            $table->timestamps();
        });

         /* DB::unprepared("
        CREATE TRIGGER `updateidaula` BEFORE UPDATE ON `aula`
        FOR EACH ROW IF (NEW.id != OLD.id) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','UPDATE',now(),'Aula','ID Aula',old.id, new.id);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updateaula` BEFORE UPDATE ON `aula`
        FOR EACH ROW IF (NEW.aula != OLD.aula) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','UPDATE',now(),'Aula','Aula',old.aula, new.aula);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updateedificioaula` BEFORE UPDATE ON `aula`
        FOR EACH ROW IF (NEW.edificio != OLD.edificio) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','UPDATE',now(),'Aula','Edificio',old.edificio, new.edificio);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `updatetipoaula` BEFORE UPDATE ON `aula`
        FOR EACH ROW IF (NEW.tipo != OLD.tipo) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','UPDATE',now(),'Aula','Tipo',old.tipo, new.tipo);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `insertaula` BEFORE INSERT ON `aula`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
       values (user(),'Administrador',now(),'INSERT','Aula','No aplica','No aplica','No aplica')
        ");

        DB::unprepared("
        CREATE TRIGGER `deleteaula` BEFORE DELETE ON `aula`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
        values (user(),'Administrador',now(),'DELETE','Aula','Aula',old.aula,'No aplica')
        ");  */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aula');
    }
}
