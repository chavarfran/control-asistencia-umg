<?php

namespace App\Http\Livewire\Pensum;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    public $career;  // Propiedad para almacenar los datos de la tabla faculty
    public $pensum;


    public $nombre_pensum;
    public $id_carrera;
    public $id_usuario;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->career = DB::table('tb_career')->get();

        $this->pensum = DB::table('tb_pensum')
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_faculty', '=', 'tb_faculty.id')
            ->select('tb_pensum.*', 'tb_career.nombre as nombre_carrera', 'tb_faculty.nombre as nombre_facultad')
            ->get();
    }

    public function render()
    {
        //dd($this->pensum);
        return view('livewire.pensum.table', [
            'careers' => $this->career, 
            'pensums' => $this->pensum  // Pasa los datos a la vista
        ]);
    }
}
