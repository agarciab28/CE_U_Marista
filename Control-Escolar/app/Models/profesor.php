<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
  protected $table = "profesor";

  protected $fillable = [
    "id_prof","id_persona","password"
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
