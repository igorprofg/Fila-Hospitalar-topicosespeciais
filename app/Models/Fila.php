<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fila extends Model
{
    protected $table = 'filas';

    protected $primaryKey = 'id_fila';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_paciente',
        'id_unidade',
        'id_medico',
        'status',
        'prioridade',
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
