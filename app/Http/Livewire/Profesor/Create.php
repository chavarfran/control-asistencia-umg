<?php

namespace App\Http\Livewire\Profesor;

use Livewire\Component;
use App\Models\Municipio;
use App\Models\Departament;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $municipio=[];
    public $departament=[];
    public $id_departament;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->departament = Departament::all();
    }

    public function updatedIdDepartament()
    {
        $this->municipio = Municipio::where('id_departamento', $this->id_departament)->get();
    }

    public function render()
    {
        return view('livewire.profesor.create', [
            'municipios' => $this->municipio,  // Pasa los datos a la vista
            'departaments' => $this->departament,
        ]);
    }
}
