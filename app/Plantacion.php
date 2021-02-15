<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantacion extends Model
{
    protected $table = 'plantacions';
    protected $fillable = [
        'id_lugar','id_proveedor','id_sis_prevencion','id_productor','tiporiego','tipoabono','cantidadplantine_ha','extencion_ha','fechaplantacion','estado'
    ];
}
