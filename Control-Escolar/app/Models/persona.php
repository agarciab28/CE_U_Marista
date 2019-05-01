<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table ="persona";
    protected $fillable = [
        'rol', 'nombres','apaterno','amaterno',
        'fnaci','sexo','email','calle','num_int',
        'num_ext','colonia','codigo_postal','ciudad',
        'estado','num_tel','num_cel','imagen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id_persona'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
}
