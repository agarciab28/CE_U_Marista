<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $table = "bitacora";

  protected $fillable = [
    "id_mov","usuario","tipoderol","fecha",
    "tipodemov","tablaafectada","campoalter","valorant","valornuevo"
  ];

  protected $hidden = [

  ];

  protected $casts = [
  ];
}
