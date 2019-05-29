<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id_evento');
            $table->string('titulo');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('color');
            $table->timestamps();
        });

        DB::unprepared("
        CREATE TRIGGER `insertevento` BEFORE INSERT ON `evento`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
       values (user(),'Administrador',now(),'INSERCION','Evento','No aplica','No aplica','No aplica')
        ");

        DB::unprepared("
        CREATE TRIGGER `deletevento` BEFORE DELETE ON `evento`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
        values (user(),'Administrador',now(),'ELIMINACION','Evento','Titulo',old.titulo,'No aplica')             
        ");

        DB::unprepared("
        CREATE TRIGGER `updateidevento` BEFORE UPDATE ON `evento`
        FOR EACH ROW IF (NEW.id_evento != OLD.id_evento) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Evento','ID Evento',old.id_evento, new.id_evento);
       END IF      
        ");

        DB::unprepared("
        CREATE TRIGGER `updatetitulo` BEFORE UPDATE ON `evento`
        FOR EACH ROW IF (NEW.titulo != OLD.titulo) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Evento','Titulo',old.titulo, new.titulo);
       END IF        
        ");

        DB::unprepared("
        CREATE TRIGGER `updatefechainicio` BEFORE UPDATE ON `evento`
        FOR EACH ROW IF (NEW.fecha_inicio != OLD.fecha_inicio) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Evento','Fecha Inicio',old.fecha_inicio, new.fecha_inicio);
       END IF       
        ");

        DB::unprepared("
        CREATE TRIGGER `updatefechafinal` BEFORE UPDATE ON `evento`
        FOR EACH ROW IF (NEW.fecha_final != OLD.fecha_final) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Evento','Fecha Final',old.fecha_final, new.fecha_final);
       END IF       
        ");

        DB::unprepared("
        CREATE TRIGGER `updatecolor` BEFORE UPDATE ON `evento`
        FOR EACH ROW IF (NEW.color != OLD.color) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Evento','Color',old.color, new.color);
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
        Schema::dropIfExists('evento');
    }
}
