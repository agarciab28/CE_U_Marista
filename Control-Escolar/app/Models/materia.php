<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
  protected $table = "materia";

  protected $fillable = [
    "id_materia","id_plan","nombre_materia","horas_materia"
  ];

  protected $hidden = [

  ];

  protected $casts = [
  ];
}
