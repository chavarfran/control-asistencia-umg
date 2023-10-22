<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PensumController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->id();
        // Validar los datos del request si es necesario
        $request->validate([
            'nombre_pensum' => 'required',
            'id_carrera' => 'required|integer',
        ]);

        // Insertar en la base de datos
        DB::table('tb_pensum')->insert([
            'nombre_pensum' => $request->nombre_pensum,
            'id_carrera' => $request->id_carrera,
            'id_usuario' => $user
        ]);

        // Redireccionar o responder según lo que necesites
        return redirect('/pensum')->with('success', 'Operación completada con éxito');
    }
}
