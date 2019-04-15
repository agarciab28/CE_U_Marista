<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    protected $table ="administrador";

    protected $fillable = [
      'activo','id_persona','password','id_admin'
    ];

    protected $hidden = [

    ];

    protected $casts = [
      'activo' => "boolean"
    ];
}
