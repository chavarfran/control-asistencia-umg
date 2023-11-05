<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;
use App\Models\Faculty;
use App\Models\Career;
use App\Models\Pensum;
use App\Models\Semester;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $section=[];
    public $semester=[];
    public $pensum=[];
    public $career=[];
    public $faculties=[]; 
    public $id_facultad;
    public $id_carrera;
    public $id_pensum;
    public $id_semestre;
    public $course_id;

    public $courseData = [];
    protected $queryString = ['course_id'];

    public function mount()
    {
        $course = DB::table('tb_course')
            ->where('tb_course.id', '=', $this->course_id)
            ->join('tb_section', 'tb_course.id_seccion', '=', 'tb_section.id')
            ->join('tb_semester', 'tb_section.id_semestre', '=', 'tb_semester.id')
            ->join('tb_pensum', 'tb_semester.id_pensum', '=', 'tb_pensum.id')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select(
                'tb_course.*', 
                'tb_section.id as id_seccion', 
                'tb_section.nombre_seccion', 
                'tb_semester.id as id_semestre', 
                'tb_semester.nombre_semestre', 
                'tb_pensum.id as id_pensum', 
                'tb_pensum.nombre_pensum', 
                'tb_career.id as id_carrera', 
                'tb_career.nombre_carrera', 
                'tb_faculty.id as id_facultad', 
                'tb_faculty.nombre_facultad')
            ->first();
            
        $this->courseData = [
            'id' => $course->id,
            'nombre_curso' => $course->nombre_curso,
            'descripcion' => $course->descripcion,
            'dia' => $course->dia,
            'horario' => $course->horario,
            'id_seccion' => $course->id_seccion,
            'nombre_seccion' => $course->nombre_seccion,
            'id_semestre' => $course->id_semestre,
            'nombre_semestre' => $course->nombre_semestre,
            'id_pensum' => $course->id_pensum,
            'nombre_pensum' => $course->nombre_pensum,
            'id_carrera' => $course->id_carrera,
            'nombre_carrera' => $course->nombre_carrera,
            'id_facultad' => $course->id_facultad,
            'nombre_facultad' => $course->nombre_facultad,
        ];

        $this->id_facultad = $course->id_facultad;
        $this->id_carrera = $course->id_carrera;
        $this->id_pensum = $course->id_pensum;
        $this->id_semestre = $course->id_semestre;

        $this->faculties = Faculty::all();
        
        $this->updateCareers();
        $this->updatePensums();
        $this->updateSemesters();
        $this->updateSections();
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

    public function updateSections()
    {
        $this->section = Section::where('id_semestre', $this->id_semestre)->get();
    }

    public function render()
    {
        return view('livewire.course.edit', [
            'course' => $this->courseData,
            'sections' => $this->section,
            'semesters' => $this->semester,
            'pensums' => $this->pensum,
            'careers' => $this->career,
            'faculties' => $this->faculties,
        ]);
    }
}
