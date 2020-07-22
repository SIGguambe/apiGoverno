<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class InstituicoesTutelada extends Model
{
    protected $fillable = [
        'id_orgao_central',
        'designacao',
        'responsavel',
        'adjunto',
    ];
}
