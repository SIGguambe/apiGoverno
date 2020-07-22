<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class InstituicoesFinanceira extends Model
{
    protected $fillable =[
        'id_orgao_central',
        'nomePresidente',
        'designacao',
    ];
}
