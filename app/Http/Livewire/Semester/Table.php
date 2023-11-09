<?php

namespace App\Http\Livewire\Semester;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    use WithPagination;

    protected $semester;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->semester = DB::table('tb_semester')
            ->join('tb_pensum', 'tb_semester.id_pensum', '=', 'tb_pensum.id')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select('tb_semester.*', 'tb_pensum.nombre_pensum', 'tb_career.nombre_carrera', 'tb_faculty.nombre_facultad')
            ->paginate(10);
    }

    public function render()
    {
        //dd($this->semester);
        return view('livewire.semester.table', [
            'semesters' => $this->semester  // Pasa los datos a la vista
        ]);
    }
}
