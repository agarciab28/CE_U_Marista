<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carrera extends Model
{
  protected $table = "carrera";

  protected $fillable = [
    "id_carrera","nombre_carrera","rvoe","total_creditos",
    "fecha"
  ];

  protected $hidden = [

  ];

  protected $casts = [
    "fecha" => "date"
  ];
}
