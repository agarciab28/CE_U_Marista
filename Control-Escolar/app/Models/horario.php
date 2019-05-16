<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
  protected $table = "horario";

  protected $fillable = [
    'hora_i_lu',
    'hora_f_lu',
    'aula_lu',
    'hora_i_ma',
    'hora_f_ma',
    'aula_ma',
    'hora_i_mi',
    'hora_f_mi',
    'aula_mi',
    'hora_i_ju',
    'hora_f_ju',
    'aula_ju',
    'hora_i_vi',
    'hora_f_vi',
    'aula_vi',
    'hora_i_sa',
    'hora_f_sa',
    'aula_sa',
    'id_grupo'
    
  ];

  protected $hidden = [

  ];

  protected $casts = [

  ];
}
