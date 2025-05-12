<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnidadeDeSaude extends Model
{
    protected $table = 'unidade_de_saude';

    protected $fillable = [
        'nome',
        'cnpj',
        'telefone',
    ];

    public function filas()
    {
        return $this->hasMany(Fila::class, 'id_unidade');
    }
}

