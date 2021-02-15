<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    protected $table = 'productors';
    protected $fillable = [
        'nombre','apellidos','fechaNacimiento','nacionalidad','direccion','celular','estado'
    ];
}
