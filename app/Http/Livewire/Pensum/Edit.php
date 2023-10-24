<?php

namespace App\Http\Livewire\Pensum;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    protected $pensum;
    
    public function mount()  // Aceptamos el ID del pensum como parámetro
    {
        $id = request()->query('id');

        $this->pensum = DB::table('tb_pensum')
            ->where('tb_pensum.id', '=', $id)
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_faculty', '=', 'tb_faculty.id')
            ->select('tb_pensum.*', 'tb_career.id as id_carrera', 'tb_career.nombre_carrera', 'tb_career.id as id_facultad', 'tb_faculty.nombre_facultad')
            ->first();
    }

    public function render()
    {
        //dd($this->pensum[0]);
        return view('livewire.pensum.edit', [
            'pensums' => $this->pensum,
        ]);
    }
}
