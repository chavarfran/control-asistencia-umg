<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'tb_assignment';

    protected $fillable = [
        'id_catedratico',
        'id_curso',
    ];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'id_catedratico');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'id_curso');
    }
}
