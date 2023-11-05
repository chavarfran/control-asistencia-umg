<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'tb_course'; // Especifica el nombre de la tabla si no sigue la convención de Laravel.

    public function semester()
    {
        return $this->belongsTo(Section::class, 'id_section');
    }
}
