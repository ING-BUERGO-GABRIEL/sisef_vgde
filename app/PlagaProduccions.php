<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlagaProduccions extends Model
{
    protected $table = 'plaga_produccions';
    protected $fillable = [
        'id_plaga','id_produccion','obserbaciones','superficieafectada_ha','fecha','estado'
    ];
}
