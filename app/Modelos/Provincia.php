<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable = [
        'id_zona',
        'nome',
        'capital',
    ];

    public function relZonas()
    {
        return $this->hasMany('app\Modelos\Zona', 'zona_id');
    }

}
