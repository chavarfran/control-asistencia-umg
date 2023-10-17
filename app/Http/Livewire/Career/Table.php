<?php

namespace App\Http\Livewire\Career;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    public $career;  // Propiedad para almacenar los datos de la tabla faculty

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->career = DB::table('tb_career')->get();  // Obtiene todos los registros de la tabla faculty
    }

    public function render()
    {
        return view('livewire.career.table', [
            'careers' => $this->career  // Pasa los datos a la vista
        ]);
    }
}
