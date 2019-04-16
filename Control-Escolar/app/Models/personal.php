<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
  protected $table ="personal";

  protected $fillable = [
    'username','password','id_persona','ced_fiscal','nssoc','activo'
  ];

  protected $hidden = [
    'password',
  ];

  protected $casts = [
    'activo' => "boolean"
  ];
}
