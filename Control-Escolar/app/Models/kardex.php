<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kardex extends Model
{
  protected $table = "kardex";

  protected $fillable = [
    "ncontrol","obj_calificacion","intento","periodo"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
