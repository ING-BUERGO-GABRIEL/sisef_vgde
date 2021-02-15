<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduccionCambiosClimaticos extends Model
{
    protected $table = 'produccion_cambios_climaticos';
    protected $fillable = [
        'id_produccion','id_cambiosclimaticos','fecha','estado'
    ];
}
