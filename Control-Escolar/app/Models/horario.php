<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
  protected $table = "horario";

  protected $fillable = [
    "aula","hora_horario","hora_fin","id_grupo"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
