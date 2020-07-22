<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class OrgaoCentral extends Model
{
    protected $fillable = [
        'designacao',
        'responsavel',
        'adjunto',
        'designacao_adjunto',

    ];
}
