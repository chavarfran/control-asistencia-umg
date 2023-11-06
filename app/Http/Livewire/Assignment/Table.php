<?php

namespace App\Http\Livewire\Assignment;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    use WithPagination;

    protected $assignment;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->assignment = DB::table('tb_assignment')
            ->join('tb_profesor', 'tb_assignment.id_catedratico', '=', 'tb_profesor.id')
            ->join('tb_course', 'tb_assignment.id_curso', '=', 'tb_course.id')
            ->join('tb_section', 'tb_course.id_seccion', '=', 'tb_section.id')
            ->join('tb_semester', 'tb_section.id_semestre', '=', 'tb_semester.id')
            ->join('tb_pensum', 'tb_semester.id_pensum', '=', 'tb_pensum.id')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')

            ->select(
                'tb_assignment.*',
                'tb_profesor.foto',
                'tb_profesor.primer_nombre',
                'tb_profesor.segundo_nombre',
                'tb_profesor.primer_apellido',
                'tb_profesor.segundo_apellido',
                'tb_course.nombre_curso',
                'tb_section.nombre_seccion',
                'tb_semester.nombre_semestre',
                'tb_semester.ciclo',
                'tb_pensum.nombre_pensum',
                'tb_career.nombre_carrera',
                'tb_faculty.nombre_facultad'
            )
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.assignment.table', [
            'assignments' => $this->assignment
        ]);
    }
}
