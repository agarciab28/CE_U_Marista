<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class calificaciones extends Model
{
  protected $table = "calificaciones";

  protected $fillable = [
    "ncontrol","id_grupo","primer_parcial","segundo_parcial",
    "examen_final","opcion_calificacion"
  ];

  protected $hidden = [

  ];

  protected $casts = [
    "primer_parcial" => "float"
    "segundo_parcial" => "float"
    "examen_final" => "float"
  ];
}
