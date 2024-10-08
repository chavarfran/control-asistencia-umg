<?php

namespace App\Http\Livewire\Semester;

use Livewire\Component;
use App\Models\Faculty;
use App\Models\Career;
use App\Models\Pensum;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $pensum=[];
    public $career=[];  // Propiedad para almacenar los datos de la tabla carrera
    public $faculties=[]; 
    public $id_facultad;
    public $id_carrera;
    public $semester_id;

    public $semesterData = [];
    protected $queryString = ['semester_id'];

    public function mount()
    {
        $semester = DB::table('tb_semester')
            ->where('tb_semester.id', '=', $this->semester_id)
            ->join('tb_pensum', 'tb_semester.id_pensum', '=', 'tb_pensum.id')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select('tb_semester.*', 'tb_pensum.id as id_pensum', 'tb_pensum.nombre_pensum', 'tb_career.id as id_carrera', 'tb_career.nombre_carrera', 'tb_faculty.id as id_facultad', 'tb_faculty.nombre_facultad')
            ->first();

        $this->semesterData = [
            'id' => $semester->id,
            'nombre_semestre' => $semester->nombre_semestre,
            'ciclo' => $semester->ciclo,
            'descripcion' => $semester->descripcion,
            'id_pensum' => $semester->id_pensum,
            'nombre_pensum' => $semester->nombre_pensum,
            'id_carrera' => $semester->id_carrera,
            'nombre_carrera' => $semester->nombre_carrera,
            'id_facultad' => $semester->id_facultad,
            'nombre_facultad' => $semester->nombre_facultad,
        ];

        $this->id_facultad = $semester->id_facultad;
        $this->id_carrera = $semester->id_carrera;

        $this->faculties = Faculty::all();
        $this->updatePensums();
        $this->updateCareers();
    }

    public function updateCareers()
    {
        $this->career = Career::where('id_facultad', $this->id_facultad)->get();
    }

    public function updatePensums()
    {
        $this->pensum = Pensum::where('id_carrera', $this->id_carrera)->get();
    }

    public function render()
    {
        return view('livewire.semester.edit', [
            'semester' => $this->semesterData,
            'pensums' => $this->pensum,  // Pasamos el pensum actual a la vista
            'careers' => $this->career,     // Pasamos las carreras a la vista
            'faculties' => $this->faculties,    // Pasamos las facultades a la vista
        ]);
    }
}
