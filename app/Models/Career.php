<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table = 'tb_career';

    // Definiendo la relación con la tabla Faculty
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'id_faculty');
    }
}
