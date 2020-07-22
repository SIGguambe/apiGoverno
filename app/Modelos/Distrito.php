<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $fillable = [
        'id_provincia',
        'nome',
        'isCapital',
        'populacao_homens',
        'populacao_mulheres',
        'ano_censo',
    ];
}
