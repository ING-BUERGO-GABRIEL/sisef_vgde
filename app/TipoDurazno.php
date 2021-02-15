<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDurazno extends Model
{
    protected $table = 'tipo_duraznos';
    protected $fillable = [
            'nombre_comun','nombre_cientifico','descripcion','foto','estado'
    ];

}
