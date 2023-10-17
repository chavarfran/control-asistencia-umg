<?php

namespace App\Http\Livewire\Career;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    public $career;  // Propiedad para almacenar los datos de la tabla faculty
    public $faculties; 

    public $nombre;
    public $descripcion;
    public $id_faculty = '';

    public function mount()  // Método que se ejecuta cuando se crea el componente
    {
        $this->career = DB::table('tb_career')->get();  // Obtiene todos los registros de la tabla faculty
        $this->faculties = DB::table('tb_faculty')->get(); 
    }

    public function saveCareer()
    {
        DB::table('tb_career')->insert([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'id_faculty' => $this->id_faculty, // Si necesitas insertar el ID de la facultad o algo relacionado, ajusta según tu tabla y columnas.
        ]);
    
        // Puedes emitir un evento o mostrar un mensaje de éxito aquí si lo deseas
        $this->reset(['nombre', 'descripcion', 'id_faculty']); // Restablece las propiedades para limpiar el formulario
    }

    public function updateFacultyId($value)
    {
        $this->id_faculty = $value;
    }

    public function render()
    {
        return view('livewire.career.table', [
            'careers' => $this->career, 'faculties' => $this->faculties  // Pasa los datos a la vista
        ]);
    }
}
