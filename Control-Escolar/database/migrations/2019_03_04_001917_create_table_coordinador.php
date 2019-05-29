<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCoordinador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinador', function (Blueprint $table) {
            $table->increments('id_coordinador',10);
            $table->string('id_carrera',10);
            $table->string('username',100)->unique();
            $table->timestamps();

            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('username')->references('username')->on('personal')->onUpdate('cascade');

           
        });

        DB::unprepared("
            CREATE TRIGGER `deletecoordinador` BEFORE DELETE ON `coordinador`
            FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
            values (user(),'Administrador',now(),'ELIMINACION','Coordinador','ID Coordinador',old.id_coordinador,'No aplica')                      
            "); 

            DB::unprepared("
            CREATE TRIGGER `updateusernamecoor` BEFORE UPDATE ON `coordinador`
            FOR EACH ROW IF (NEW.username != OLD.username) THEN
           insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
           values(user(),'Administrador','ACTUALIZACION',now(),'Coordinador','Username',old.username, new.username);
           END IF
            ");

            DB::unprepared("
            CREATE TRIGGER `updateidcoor` BEFORE UPDATE ON `coordinador`
            FOR EACH ROW IF (NEW.id_coordinador != OLD.id_coordinador) THEN
           insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
           values(user(),'Administrador','ACTUALIZACION',now(),'Coordinador','ID Carrera',old.id_coordinador, new.id_coordinador);
           END IF
            ");

            DB::unprepared("
            CREATE TRIGGER `insertcoordinador` BEFORE INSERT ON `coordinador`
            FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
           values (user(),'Administrador',now(),'INSERCION','Coordinador','No aplica','No aplica','No aplica')
            ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinador');
    }
}
