<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'tb_profesor'; // Especifica el nombre de la tabla si no sigue la convención de Laravel.

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }
}
