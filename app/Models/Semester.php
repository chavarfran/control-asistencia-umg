<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'tb_semester'; // Especifica el nombre de la tabla si no sigue la convención de Laravel.

    public function pensum()
    {
        return $this->belongsTo(Pensum::class, 'id_pensum');
    }
}
