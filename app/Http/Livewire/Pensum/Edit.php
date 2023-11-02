<?php

namespace App\Http\Livewire\Pensum;

use Livewire\Component;
use App\Models\Career;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $career = [];      
    public $faculties = [];   
    public $id_facultad;
    public $pensum_id;  // Esto almacenará el ID del pensum obtenido de la URL.

    // Especificamos que queremos mantener 'pensum_id' en la cadena de consulta.
    public $pensumData = [];
    protected $queryString = ['pensum_id'];
    
    public function mount()
    {
        $pensum = DB::table('tb_pensum')
            ->where('tb_pensum.id', '=', $this->pensum_id)
            ->join('tb_career', 'tb_pensum.id_carrera', '=', 'tb_career.id')
            ->join('tb_faculty', 'tb_career.id_facultad', '=', 'tb_faculty.id')
            ->select('tb_pensum.*', 'tb_career.id as id_carrera', 'tb_career.nombre_carrera', 'tb_faculty.id as id_facultad', 'tb_faculty.nombre_facultad')
            ->first();

        $this->pensumData = [
            'id' => $pensum->id,
            'nombre_pensum' => $pensum->nombre_pensum,
            'id_carrera' => $pensum->id_carrera,
            'nombre_carrera' => $pensum->nombre_carrera,
            'id_facultad' => $pensum->id_facultad,
            'nombre_facultad' => $pensum->nombre_facultad,
        ];

        $this->faculties = Faculty::all();
        $this->updateCareers();
    }

    public function updateCareers()
    {
        $this->career = Career::where('id_facultad', $this->id_facultad)->get();
        $this->pensumData['id_carrera'] = ''; // Esto resetea el valor seleccionado previamente
    }

    public function render()
    {
        return view('livewire.pensum.edit', [
            'pensum' => $this->pensumData,  // Pasamos el pensum actual a la vista
            'careers' => $this->career,     // Pasamos las carreras a la vista
            'faculties' => $this->faculties,    // Pasamos las facultades a la vista
        ]);
    }
}
