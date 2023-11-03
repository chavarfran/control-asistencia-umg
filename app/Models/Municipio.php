<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'tb_municipio';

    // Definiendo la relación con la tabla Faculty
    public function departament()
    {
        return $this->belongsTo(Departament::class, 'id_departament');
    }
}
