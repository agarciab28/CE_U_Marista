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
            $table->string('id_persona',10);
            $table->string('rol',30);
            $table->string('nombres',50);
            $table->string('apaterno',30);
            $table->string('amaterno',30)->nullable();
            $table->date('fnaci');
            $table->enum('sexo',['M','F'])->nullable();
            $table->string('email',30)->nullable();
            $table->string('calle',30)->nullable();
            $table->string('num_int',20)->nullable();
            $table->string('num_ext',20)->nullable();
            $table->string('colonia',50)->nullable();
            $table->string('codigo_postal',10)->nullable();
            $table->string('ciudad',30)->nullable();
            $table->string('estado',30)->nullable();
            $table->string('num_tel',10)->nullable();
            $table->string('num_cel',10)->nullable();
            //$table->timestamps();
            $table->primary('id_persona');
        });
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
