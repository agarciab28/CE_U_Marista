<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class calificaciones extends Model
{
  protected $table = "calificaciones";

  protected $fillable = [
    "ncontrol","id_grupo","primer_parcial","segundo_parcial",
    "examen_final", "faltas_primer", "faltas_segundo", "faltas_tercer", "total_faltas",
    "promedio_calificacion", "opcion_calificacion"
  ];

  protected $hidden = [

  ];

  protected $casts = [
    "ncontrol" => "string",
    "id_grupo" => "int",
    "primer_parcial" => "float",
    "segundo_parcial" => "float",
    "examen_final" => "float",
    "faltas_primer" => "int",
    "faltas_segundo" => "int",
    "faltas_tercer" => "int",
    "total_faltas" => "int",
    "promedio_calificacion" => "float",
    "opcion_calificacion" => "string"
  ];
}
