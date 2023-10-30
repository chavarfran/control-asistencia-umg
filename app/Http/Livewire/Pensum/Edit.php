<?php

namespace App\Http\Livewire\Pensum;

use Livewire\Component;
use App\Models\Career;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    protected $pensum;  // Almacena el pensum actual para edición
    public $career=[];      // Propiedad para almacenar los datos de las carreras
    public $faculties=[];   // Propiedad para almacenar los datos de las facultades
    public $id_facultad;     // Propiedad para almacenar el id de la facultad seleccionada
    public $id_pensum;

    public function mount()  // Aceptamos el ID del pensum como parámetro
    {
        $this->id_pensum = intval(request()->query('id'));

        $this->faculties = Faculty::all();

        $this->pensum = DB::table('tb_pensum')
            ->where('tb_pensum.id', '=', $this->id_pensum)
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select('tb_pensum.*', 'tb_career.id as id_carrera', 'tb_career.nombre_carrera', 'tb_faculty.id as id_facultad', 'tb_faculty.nombre_facultad')
            ->first();

        $this->updatedIdFaculty($this->pensum->id_facultad);
    }

    public function updatedIdFaculty($id)
    {
        $this->career = Career::where('id_facultad', $id)->get();
    }

    public function render()
    {
        return view('livewire.pensum.edit', [
            'pensum' => $this->pensum,  // Pasamos el pensum actual a la vista
            'careers' => $this->career,         // Pasamos las carreras a la vista
            'faculties' => $this->faculties,    // Pasamos las facultades a la vista
        ]);
    }
}
