<?php

namespace App\Http\Livewire\Pensum;

use Livewire\Component;
use App\Models\Career;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public $career=[];  // Propiedad para almacenar los datos de la tabla carrera
    public $faculties=[]; 
    public $id_faculty;

    public $nombre_pensum;
    public $id_carrera;
    public $id_usuariol;

    public $showSuccesNotification  = false;
    public $showDemoNotification = false;

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->faculties = Faculty::all();
    }

    public function updatedIdFaculty()
    {
        $this->career = Career::where('id_faculty', $this->id_faculty)->get();
    }

    public function render()
    {
        return view('livewire.pensum.create', [
            'careers' => $this->career,  // Pasa los datos a la vista
            'faculties' => $this->faculties,
        ]);
    }
}
