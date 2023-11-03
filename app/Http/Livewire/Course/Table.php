<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;
use Livewire\WithPagination; 
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    use WithPagination; 

    protected $course;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->course = DB::table('tb_course')
            ->join('tb_section', 'tb_course.id_seccion', '=', 'tb_section.id')
            ->join('tb_semester', 'tb_section.id_semestre', '=', 'tb_semester.id')
            ->join('tb_pensum', 'tb_semester.id_pensum', '=', 'tb_pensum.id')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select('tb_course.*', 'tb_section.nombre_seccion', 'tb_semester.nombre_semestre', 'tb_semester.ciclo', 'tb_pensum.nombre_pensum', 'tb_career.nombre_carrera', 'tb_faculty.nombre_facultad')
            ->paginate(10);
    }

    public function render()
    {
        //dd($this->course );
        return view('livewire.course.table', [
            'courses' => $this->course  
        ]);
    }
}
