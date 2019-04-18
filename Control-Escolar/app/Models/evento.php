<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
  protected $table = "evento";

  protected $fillable = [
    "id_evento","titulo","fecha_inicio","fecha_final","color"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
