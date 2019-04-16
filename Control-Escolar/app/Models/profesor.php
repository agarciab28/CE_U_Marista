<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
  protected $table = "profesor";

  protected $fillable = [
    "id_prof","especialidad","username"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
