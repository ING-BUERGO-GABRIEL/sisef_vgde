<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinoProduccion extends Model
{
    protected $table = 'destino_produccions';
    protected $fillable = [
        'destino','detalle','estado'
    ];
}
