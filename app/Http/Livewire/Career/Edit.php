<?php

namespace App\Http\Livewire\Career;

use Livewire\Component;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $faculties=[]; 
    public $career_id;
    // Especificamos que queremos mantener 'pensum_id' en la cadena de consulta.
    public $careerData = [];
    protected $queryString = ['career_id'];
    
    public function mount()
    {
        $career = DB::table('tb_career')
            ->where('tb_career.id', '=', $this->career_id)
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select('tb_career.*', 'tb_faculty.id as id_facultad', 'tb_faculty.nombre_facultad')
            ->first();
        
        $this->careerData = [
            'id' => $career->id,
            'nombre_carrera' => $career->nombre_carrera,
            'descripcion' => $career->descripcion,
            'id_facultad' => $career->id_facultad,
            'nombre_facultad' => $career->nombre_facultad,
        ];            

        $this->faculties = Faculty::all();
    }

    public function render()
    {
        return view('livewire.career.edit', [
            'career' => $this->careerData,     // Pasamos las carreras a la vista
            'faculties' => $this->faculties,    // Pasamos las facultades a la vista
        ]);
    }
}
