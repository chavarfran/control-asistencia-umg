<?php

namespace App\Http\Livewire\Section;

use Livewire\Component;
use Livewire\WithPagination; 
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    use WithPagination; 

    protected $section;

    public function mount()
    {
        $this->section = DB::table('tb_section')
            ->join('tb_semester', 'tb_section.id_semestre', '=', 'tb_semester.id')
            ->join('tb_pensum', 'tb_semester.id_pensum', '=', 'tb_pensum.id')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select('tb_section.*', 'tb_semester.nombre_semestre', 'tb_semester.ciclo', 'tb_pensum.nombre_pensum', 'tb_career.nombre_carrera', 'tb_faculty.nombre_facultad')
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.section.table', [
            'sections' => $this->section  
        ]);
    }
}
