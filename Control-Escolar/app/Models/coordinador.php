<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coordinador extends Model
{
  protected $table = "coordinador";

  protected $fillable = [
    "id_coordinador","id_carrera","id_persona","password"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
