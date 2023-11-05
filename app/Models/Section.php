<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'tb_section'; // Especifica el nombre de la tabla si no sigue la convención de Laravel.

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'id_semestre');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'id_section');
    }
}
