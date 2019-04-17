<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lista_grupo extends Model
{
    protected $table = "lista_grupo";
    protected $fillable = [
        "id_persona","id_grupo"
      ];
}
