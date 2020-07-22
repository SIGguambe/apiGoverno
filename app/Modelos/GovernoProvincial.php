<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class GovernoProvincial extends Model
{
    protected $fillable = [
        'id_provincia',
        'secretario_estado',
        'governador',
        'secretario_permanente',
    ];
}
