<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plaga extends Model
{
    protected $table = 'plagas';
    protected $fillable = [
        'nombre','clima','descripcion','estado'
    ];
}
