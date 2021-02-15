<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FenomenoClima extends Model
{
    protected $table = 'fenomeno_climas';
    protected $fillable = [
        'nombre','descripcion','estado'
    ];
}
