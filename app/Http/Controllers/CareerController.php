<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del request si es necesario
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'id_faculty' => 'required|integer',
        ]);

        // Insertar en la base de datos
        DB::table('tb_career')->insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'id_faculty' => $request->id_faculty,
        ]);

        // Redireccionar o responder según lo que necesites
        return back()->with('success', 'Carrera añadida con éxito');
    }
}
