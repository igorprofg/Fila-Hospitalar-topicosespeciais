<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fila extends Model
{
    protected $table = 'filas';
    protected $primaryKey = 'id_fila'; // Correto se na sua migration está como 'id_fila'
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'id_paciente',
        'id_unidade',
        'id_medico',
        'status',
        'prioridade',
    ];

    // Relacionamento com Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    // Relacionamento com Médico
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico', 'id_medico');
    }

    // Relacionamento com Unidade de Saúde
    public function unidade()
    {
        return $this->belongsTo(UnidadeDeSaude::class, 'id_unidade', 'id_unidade');
    }
}
