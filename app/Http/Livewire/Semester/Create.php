<?php

namespace App\Http\Livewire\Semester;

use Livewire\Component;
use App\Models\Faculty;
use App\Models\Career;
use App\Models\Pensum;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $pensum=[];
    public $career=[];  // Propiedad para almacenar los datos de la tabla carrera
    public $faculties=[]; 
    public $id_faculty;
    public $id_career;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->faculties = Faculty::all();
    }

    public function updatedIdFaculty()
    {
        $this->career = Career::where('id_facultad', $this->id_faculty)->get();
    }

    public function updatedIdCareer()
    {
        $this->pensum = Pensum::where('id_carrera', $this->id_career)->get();
    }

    public function render()
    {
        return view('livewire.semester.create',[        
            'pensums' => $this->pensum,
            'careers' => $this->career,  // Pasa los datos a la vista
            'faculties' => $this->faculties,
        ]);
    }
}
