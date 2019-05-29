<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdministrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->increments('id_admin',10);
            $table->string('username',100);
            $table->timestamps();

            $table->foreign('username')->references('username')->on('personal');

        });
        
        DB::unprepared("
        CREATE TRIGGER `updateidadmin` BEFORE UPDATE ON `administrador`
        FOR EACH ROW IF (NEW.id_admin != OLD.id_admin) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Administrador','ID Admin',old.id_admin, new.id_admin);
       END IF    
        ");

        DB::unprepared("
        CREATE TRIGGER `updateusername` BEFORE UPDATE ON `administrador`
        FOR EACH ROW IF (NEW.username != OLD.username) THEN
       insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
       values(user(),'Administrador','ACTUALIZACION',now(),'Administrador','Username',old.username, new.username);
       END IF
        ");

        DB::unprepared("
        CREATE TRIGGER `insertaradministrador` BEFORE INSERT ON `administrador`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
       values (user(),'Administrador',now(),'INSERT','Administrador','No aplica','No aplica','No aplica')    
        ");

        DB::unprepared("
        CREATE TRIGGER `deleteadministrador` BEFORE DELETE ON `administrador`
        FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
        values (user(),'Administrador',now(),'ELIMINACION','Administrador',old.username,'No aplica','No aplica')
            
        ");

     

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrador');
    }
}
