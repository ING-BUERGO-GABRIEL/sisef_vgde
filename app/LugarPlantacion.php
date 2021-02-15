<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarPlantacion extends Model
{
    protected $table = 'lugar_plantacions';
    protected $fillable = [
        'municipio','zona','latitud','longitud','estado'
    ];
}
