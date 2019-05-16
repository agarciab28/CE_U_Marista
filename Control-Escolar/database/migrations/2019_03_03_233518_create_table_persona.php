<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id_persona',10);
            $table->string('rol',30);
            $table->string('nombres',150);
            $table->string('apaterno',130);
            $table->string('amaterno',130)->nullable();
            $table->string('curp',18)->unique();
            $table->date('fnaci');
            $table->enum('sexo',['M','F'])->nullable();
            $table->string('email',130)->nullable();
            $table->string('calle',130)->nullable();
            $table->string('num_int',120)->nullable();
            $table->string('num_ext',120)->nullable();
            $table->string('colonia',150)->nullable();
            $table->string('codigo_postal',10)->nullable();
            $table->string('ciudad',130)->nullable();
            $table->string('estado',130)->nullable();
            $table->string('num_tel',110)->nullable();
            $table->string('num_cel',110)->nullable();
            $table->string('imagen',190)->nullable();
            $table->timestamps();
        });

/*
    DB::unprepared("
    CREATE TRIGGER updatenombres BEFORE UPDATE ON persona
    FOR EACH ROW IF (NEW.nombres != OLD.nombres) THEN
    insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
    values (user(), NEW.rol,'UPDATE',now(),'Persona','Nombres',old.nombres, new.nombres);
    END IF

    ");

    DB::unprepared("
    CREATE TRIGGER `updatecurp` BEFORE UPDATE ON `persona`
    FOR EACH ROW IF (NEW.curp != OLD.curp) THEN
    insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
    values (user(), NEW.rol,'UPDATE',now(),'Persona','Curp',old.curp, new.curp);
    END IF
    ");

    DB::unprepared("
    CREATE TRIGGER `insertpersona` BEFORE INSERT ON `persona`
    FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
    values (user(),NEW.rol,now(),'INSERT','Persona','No aplica','No aplica','No aplica')
    ");


    DB::unprepared("
    CREATE TRIGGER `deletepersona` BEFORE DELETE ON `persona`
    FOR EACH ROW insert into bitacora(usuario,tipoderol,fecha,tipodemov,tablaafectada,campoalter,valorant,valornuevo)
    values (user(),old.rol,now(),'DELETE','Persona',old.curp,'No aplica','No aplica')

    ");

    DB::unprepared("
    CREATE TRIGGER `updateamaterno` BEFORE UPDATE ON `persona`
    FOR EACH ROW IF (NEW.amaterno != OLD.amaterno) THEN
    insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
    values (user(), NEW.rol,'UPDATE',now(),'Persona','Apellido Materno',old.amaterno, new.amaterno);
    END IF
    ");

    DB::unprepared("
    CREATE TRIGGER `updateapaterno` BEFORE UPDATE ON `persona`
    FOR EACH ROW IF (NEW.apaterno != OLD.apaterno) THEN
    insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada,campoalter,valorant,valornuevo)
    values (user(), NEW.rol,'UPDATE',now(),'Persona','Apellido Paterno',old.apaterno, new.apaterno);
    END IF
    ");

    DB::unprepared("
    CREATE TRIGGER `updateemail` BEFORE UPDATE ON `persona`
    FOR EACH ROW IF (NEW.email != OLD.email) THEN
    insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
    values (user(), NEW.rol,'UPDATE',now(),'Persona','Email',old.email, new.email);
    END IF
    ");

    DB::unprepared("
    CREATE TRIGGER `updatenumcel` BEFORE UPDATE ON `persona`
    FOR EACH ROW IF (NEW.num_cel != OLD.num_cel) THEN
    insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
    values (user(), NEW.rol,'UPDATE',now(),'Persona','Numero Celular',old.num_cel, new.num_cel);
    END IF
    ");


    DB::unprepared("
    CREATE TRIGGER `updatenumtel` BEFORE UPDATE ON `persona`
    FOR EACH ROW IF (NEW.num_tel != OLD.num_tel) THEN
    insert into bitacora(usuario,tipoderol,tipodemov,fecha,tablaafectada, campoalter,valorant,valornuevo)
    values (user(), NEW.rol,'UPDATE',now(),'Persona','Numero Telefonico',old.num_tel, new.num_tel);
    END IF
    "); */






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
