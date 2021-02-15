<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProducDestinoproduc extends Model
{
    protected $table = 'produc_destinoproducs';
    protected $fillable = [
        'id_produccion','id_destinoproduccion','porsentaje_destinado','estado'
    ];
}
