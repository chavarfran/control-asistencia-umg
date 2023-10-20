<?php

namespace App\Http\Livewire\Faculty;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    public $faculties;  // Propiedad para almacenar los datos de la tabla faculty

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->faculties = DB::table('tb_faculty')->get();  // Obtiene todos los registros de la tabla faculty
    }
    
    public function render()
    {
        return view('livewire.faculty.table', [
            'faculties' => $this->faculties  // Pasa los datos a la vista
        ]);
    }
}
