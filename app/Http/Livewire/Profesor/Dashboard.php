<?php

namespace App\Http\Livewire\Profesor;

use Livewire\Component;
use App\Models\Profesor;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    protected $course;

    public function mount()
    {
        $user = auth()->user();
        $id_profesor = Profesor::where('email', $user->email)->first();

        $this->course = DB::table('tb_assignment')
            ->where('tb_assignment.id_catedratico', '=', $id_profesor->id)
            ->join('tb_profesor', 'tb_assignment.id_catedratico', '=', 'tb_profesor.id') // Corrección aquí
            ->join('tb_course', 'tb_assignment.id_curso', '=', 'tb_course.id')
            ->join('tb_section', 'tb_course.id_seccion', '=', 'tb_section.id')
            ->join('tb_semester', 'tb_section.id_semestre', '=', 'tb_semester.id')
            ->join('tb_pensum', 'tb_semester.id_pensum', '=', 'tb_pensum.id')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select(
                'tb_profesor.id as id_catedratico',
                'tb_course.nombre_curso',
                'tb_course.horario_inicio',
                'tb_course.horario_final',
                'tb_course.dia',
                'tb_section.nombre_seccion',
                'tb_semester.nombre_semestre',
                'tb_semester.ciclo',
                'tb_pensum.nombre_pensum',
                'tb_career.nombre_carrera',
                'tb_faculty.nombre_facultad'
            )
            ->get();
    }

    public function render()
    {
        dd($this->course);
        return view('livewire.profesor.dashboard');
    }
}
