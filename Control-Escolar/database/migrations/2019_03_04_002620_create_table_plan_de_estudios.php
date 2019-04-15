<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlanDeEstudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_de_estudios', function (Blueprint $table) {
            $table->string('id_plan',30);
            $table->string('id_carrera',10);
            $table->string('nombre_plan',70);
            $table->date('fecha');
            $table->timestamps();
            $table->primary('id_plan');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_de_estudios');
    }
}
