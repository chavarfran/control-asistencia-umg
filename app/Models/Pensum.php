<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    use HasFactory;

    protected $table = 'tb_pensum'; // Especifica el nombre de la tabla si no sigue la convención de Laravel.

    public function career()
    {
        return $this->belongsTo(Career::class, 'id_carrera');
    }
}
