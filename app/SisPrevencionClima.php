<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SisPrevencionClima extends Model
{
    protected $table = 'sis_prevencion_climas';
    protected $fillable = [
        'nombre','descripcion','estado'
    ];
}
