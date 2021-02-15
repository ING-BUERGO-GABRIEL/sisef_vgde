<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuestador extends Model
{
    protected $table = 'encuestadors';
    protected $fillable = [
        'nombre','apellidos','direccion','profesion','telefono','estado'
    ];
}
