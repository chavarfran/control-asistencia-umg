<?php

namespace App\Http\Livewire\Section;

use Livewire\Component;
use App\Models\Faculty;
use App\Models\Career;
use App\Models\Pensum;
use App\Models\Semester;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $semester=[];
    public $pensum=[];
    public $career=[];
    public $faculties=[]; 
    public $id_facultad;
    public $id_carrera;
    public $id_pensum;
    public $section_id;

    public $sectionData = [];
    protected $queryString = ['section_id'];

    public function mount()
    {
        $section = DB::table('tb_section')
            ->where('tb_semester.id', '=', $this->section_id)
            ->join('tb_semester', 'tb_section.id_semestre', '=', 'tb_semester.id')
            ->join('tb_pensum', 'tb_semester.id_pensum', '=', 'tb_pensum.id')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select('tb_section.*', 'tb_semester.id as id_semestre', 'tb_semester.nombre_semestre', 'tb_pensum.id as id_pensum', 'tb_pensum.nombre_pensum', 'tb_career.id as id_carrera', 'tb_career.nombre_carrera', 'tb_faculty.id as id_facultad', 'tb_faculty.nombre_facultad')
            ->first();
            
        $this->sectionData = [
            'id' => $section->id,
            'nombre_seccion' => $section->nombre_seccion,
            'id_semestre' => $section->id_semestre,
            'nombre_semestre' => $section->nombre_semestre,
            'id_pensum' => $section->id_pensum,
            'nombre_pensum' => $section->nombre_pensum,
            'id_carrera' => $section->id_carrera,
            'nombre_carrera' => $section->nombre_carrera,
            'id_facultad' => $section->id_facultad,
            'nombre_facultad' => $section->nombre_facultad,
        ];

        $this->id_facultad = $section->id_facultad;
        $this->id_carrera = $section->id_carrera;
        $this->id_pensum = $section->id_pensum;

        $this->faculties = Faculty::all();
        
        $this->updateCareers();
        $this->updatePensums();
        $this->updateSemesters();
    }

    public function updateCareers()
    {
        $this->career = Career::where('id_facultad', $this->id_facultad)->get();
    }

    public function updatePensums()
    {
        $this->pensum = Pensum::where('id_carrera', $this->id_carrera)->get();
    }

    public function updateSemesters()
    {
        $this->semester = Semester::where('id_pensum', $this->id_pensum)->get();
    }

    public function render()
    {
        //dd($this->sectionData);
        return view('livewire.section.edit', [
            'section' => $this->sectionData,
            'semesters' => $this->semester,
            'pensums' => $this->pensum,
            'careers' => $this->career,
            'faculties' => $this->faculties,
        ]);
    }
}
