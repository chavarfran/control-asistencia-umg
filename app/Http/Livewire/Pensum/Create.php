<?php

namespace App\Http\Livewire\Pensum;

use Livewire\Component;
use App\Models\Career;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $career=[];  // Propiedad para almacenar los datos de la tabla carrera
    public $faculties=[]; 
    public $id_faculty;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->faculties = Faculty::all();
    }

    public function updatedIdFaculty()
    {
        $this->career = Career::where('id_facultad', $this->id_faculty)->get();
    }

    public function render()
    {
        return view('livewire.pensum.create', [
            'careers' => $this->career,  // Pasa los datos a la vista
            'faculties' => $this->faculties,
        ]);
    }
}
