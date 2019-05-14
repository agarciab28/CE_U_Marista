<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class configuracion extends Model
{
  protected $table = "configuracion";
  protected $primaryKey=null;

  protected $fillable = [
    "periodo_actual","director","fecha_inicio","fecha_terminacion",
    "Jefe_control_escolar"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
