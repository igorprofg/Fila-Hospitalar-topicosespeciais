<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fila extends Model
{
    protected $table = 'filas';

    protected $fillable = [
        'status',
        'data',
        'prioridade',
        'id_paciente',
        'id_unidade',
        'id_medico',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico');
    }

    public function unidade()
    {
        return $this->belongsTo(UnidadeDeSaude::class, 'id_unidade');
    }
}

