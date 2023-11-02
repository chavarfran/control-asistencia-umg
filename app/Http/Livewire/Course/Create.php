<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;
use App\Models\Faculty;
use App\Models\Career;
use App\Models\Pensum;
use App\Models\Semester;
use App\Models\Section;
use Illuminate\Support\Facades\DB;


class Create extends Component
{
    public $section=[];
    public $semester=[];
    public $pensum=[];
    public $career=[];  
    public $faculties=[]; 
    public $id_faculty;
    public $id_career;
    public $id_pensum;
    public $id_semester;

    public function mount()
    {
        $this->faculties = Faculty::all();
    }

    public function updatedIdFaculty()
    {
        $this->career = Career::where('id_facultad', $this->id_faculty)->get();
    }

    public function updatedIdCareer()
    {
        $this->pensum = Pensum::where('id_carrera', $this->id_career)->get();
    }

    public function updatedIdPensum()
    {
        $this->semester = Semester::where('id_pensum', $this->id_pensum)->get();
    }

    public function updatedIdSemester()
    {
        $this->section = Section::where('id_semestre', $this->id_semester)->get();
    }

    public function render()
    {
        return view('livewire.course.create',[  
            'sections' => $this->section,      
            'semesters' => $this->semester,    
            'pensums' => $this->pensum,
            'careers' => $this->career,  
            'faculties' => $this->faculties,
        ]);
    }
}
