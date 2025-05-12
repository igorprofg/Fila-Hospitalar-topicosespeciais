<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
        'nome',
        'cpf',
        'prontuario',
    ];

    public function filas()
    {
        return $this->hasMany(Fila::class, 'id_paciente');
    }
}

