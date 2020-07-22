<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'id_distrito',
        'id_governo_provincial',
        'id_instituicao_ensino',
        'id_orgao_central',
        'id_instituicao_tutelada',
        'id_instituicao_finaceira',
        'avenida',
        'numero',
        'site',
        'telefone1',
        'telefone2',
        'email',
    ];
}
