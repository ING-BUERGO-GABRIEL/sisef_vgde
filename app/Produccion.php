<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    protected $table = 'produccions';
    protected $fillable = [
        'id_plantacion','id_tipo_durazno','id_usuario','id_encuestador','preciocaja_bs','fechaproduccion','cantidadcajas','costoproduccion','diametropromedio','estado'
    ];
}
