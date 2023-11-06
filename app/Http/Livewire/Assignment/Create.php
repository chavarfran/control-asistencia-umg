<?php

namespace App\Http\Livewire\Assignment;

use Livewire\Component;
use App\Models\Profesor;
use App\Models\Faculty;
use App\Models\Career;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $profesor = [];
    public $course = [];
    public $career = [];
    public $faculties = [];
    public $id_faculty;
    public $id_career;

    public function mount()
    {
        $this->faculties = Faculty::all();

        $this->profesor = Profesor::all();
    }

    public function updatedIdFaculty()
    {
        $this->career = Career::where('id_facultad', $this->id_faculty)->get();
    }

    public function updatedIdCareer()
    {
        $this->course = DB::table('tb_career')
            ->where('tb_career.id', '=', $this->id_career)
            ->join('tb_pensum', 'tb_career.id', '=', 'tb_pensum.id_carrera')
            ->join('tb_semester', 'tb_pensum.id', '=', 'tb_semester.id_pensum')
            ->join('tb_section', 'tb_semester.id', '=', 'tb_section.id_semestre')
            ->join('tb_course', 'tb_section.id', '=', 'tb_course.id_seccion')
            ->select(
                'tb_course.*',
                'tb_section.nombre_seccion',
                'tb_semester.nombre_semestre',
                'tb_semester.ciclo',
                'tb_pensum.nombre_pensum'
            )
            ->get();
    }

    public function render()
    {
        //dd($this->profesor);
        return view('livewire.assignment.create', [
            'profesors' => $this->profesor,
            'courses' => $this->course,
            'careers' => $this->career,
            'faculties' => $this->faculties,
        ]);
    }
}
