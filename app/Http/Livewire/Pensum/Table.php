<?php

namespace App\Http\Livewire\Pensum;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    public $pensum;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->pensum = DB::table('tb_pensum')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_faculty', '=', 'tb_faculty.id')
            ->select('tb_pensum.*', 'tb_career.nombre_carrera', 'tb_faculty.nombre_facultad')
            ->get();
    }

    public function render()
    {
        return view('livewire.pensum.table', [
            'pensums' => $this->pensum  // Pasa los datos a la vista
        ]);
    }
}
