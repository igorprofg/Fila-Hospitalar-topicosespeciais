<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';

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

