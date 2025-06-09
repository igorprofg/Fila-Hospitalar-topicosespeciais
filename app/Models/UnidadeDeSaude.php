<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnidadeDeSaude extends Model
{
    protected $table = 'unidades_de_saude';

    protected $primaryKey = 'id_unidade';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nome',
        'bairro',
        'cidade',
    ];

    public function filas()
    {
        return $this->hasMany(Fila::class, 'id_unidade');
    }
}
