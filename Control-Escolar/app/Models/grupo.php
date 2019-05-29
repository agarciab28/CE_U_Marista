<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
  protected $table = "grupo";

  protected $fillable = [
    "id_grupo","seccion","id_carrera","id_materia","id_prof",
    "periodo","check_calif"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
