<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class plan_de_estudios extends Model
{
  protected $table = "plan_de_estudios";

  protected $fillable = [
    "id_plan","id_carrera","nombre_plan","fecha"
  ];

  protected $hidden = [

  ];

  protected $casts = [
  ];
}
