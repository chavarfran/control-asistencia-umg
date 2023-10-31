<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SemesterController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->id();
        // Validar los datos del request si es necesario
        $request->validate([
            'nombre_semestre' => 'required',
            'ciclo' => 'required',
            'id_pensum' => 'required|integer',
        ]);

        // Insertar en la base de datos
        DB::table('tb_semester')->insert([
            'nombre_semestre' => $request->nombre_semestre,
            'ciclo' => $request->ciclo,
            'descripcion' => $request->descripcion,
            'id_pensum' => $request->id_pensum,
            'id_usuario' => $user,
            'created_at' => Carbon::now(),
        ]);

        // Redireccionar o responder según lo que necesites
        return redirect('/semestre')->with('success', 'Operación completada con éxito');
    }
}
