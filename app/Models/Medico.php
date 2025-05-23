<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';

    protected $primaryKey = 'id_medico';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nome',
        'crm',
        'especialidade',
    ];

    public function filas()
    {
        return $this->hasMany(Fila::class, 'id_medico');
    }
}
