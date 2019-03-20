<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
  protected $table = "alumno";

  protected $fillable = [
    "ncontrol","id_carrera","num_tel_fam","nombre_fam",
    "id_persona","password"
  ];

  protected $hidden = [
    
  ];

  protected $casts = [

  ];
}
