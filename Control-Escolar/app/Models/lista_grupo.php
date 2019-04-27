<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lista_grupo extends Model
{
      protected $table = "lista_grupo";

      protected $fillable = [
        "ncontrol","nombres","id_grupo"
      ];

      protected $hidden = [

      ];
    
      protected $casts = [
      ];
}
