<?php

namespace App\Http\Livewire\Profesor;

use Livewire\Component;
use App\Models\Municipio;
use App\Models\Departament;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public $municipio = [];
    public $departament = [];
    public $id_departament;
    public $profesor_id;

    public $profesorData = [];
    protected $queryString = ['profesor_id'];

    public function mount()
    {
        $profesor = DB::table('tb_profesor')
            ->where('tb_profesor.id', '=', $this->profesor_id)
            ->join('tb_municipio', 'tb_profesor.id_municipio', '=', 'tb_municipio.id')
            ->join('tb_departament', 'tb_municipio.id_departamento', '=', 'tb_departament.id')
            ->select('tb_profesor.*', 'tb_municipio.id as id_municipio', 'tb_municipio.nombre_municipio', 'tb_departament.id as id_departamento', 'tb_departament.nombre_departamento')
            ->first();

        $this->profesorData = [
            'id' => $profesor->id,
            'primer_nombre' => $profesor->primer_nombre,
            'segundo_nombre' => $profesor->segundo_nombre,
            'primer_apellido' => $profesor->primer_apellido,
            'segundo_apellido' => $profesor->segundo_apellido,
            'dpi' => $profesor->dpi,
            'email' => $profesor->email,
            'telefono' => $profesor->telefono,
            'direccion' => $profesor->direccion,
            'codigo_catedratico' => $profesor->codigo_catedratico,
            'foto' => $profesor->foto,
            'id_municipio' => $profesor->id_municipio,
            'nombre_municipio' => $profesor->nombre_municipio,
            'id_departamento' => $profesor->id_departamento,
            'nombre_departamento' => $profesor->nombre_departamento,
        ];

        $this->id_departament = $profesor->id_departamento;

        $this->departament = Departament::all();
        $this->updatedIdDepartament();
    }

    public function updatedIdDepartament()
    {
        $this->municipio = Municipio::where('id_departamento', $this->id_departament)->get();
    }

    public function render()
    {
        return view('livewire.profesor.edit', [
            'profesor' => $this->profesorData,
            'municipios' => $this->municipio,
            'departaments' => $this->departament,
        ]);
    }
}
