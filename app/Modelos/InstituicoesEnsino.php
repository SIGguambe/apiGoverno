<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class InstituicoesEnsino extends Model
{
    protected $fillable = [
        'id_orgao_central',
        'designacao',
        'responsavel',
        'designacaoResponsavel',
        'nomeAdjunto',
        'designacaoAdjunto',
        'isPublica',
        'nivel',
    ];
}
