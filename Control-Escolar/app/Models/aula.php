<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aula extends Model
{
    protected $table = "aula";

    protected $fillable = [
        "id","aula", "edificio", "tipo"
    ];

    protected $hidden = [];

    protected $casts = [];
}
