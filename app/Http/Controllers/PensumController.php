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

    public function update(Request $request, $id)
    {
        $user = auth()->id();
        $request->validate([
            'nombre_pensum' => 'required',
            'id_carrera' => 'required|integer',
        ]);

        DB::table('tb_pensum')
            ->where('id', $id)
            ->update([
                'nombre_pensum' => $request->nombre_pensum,
                'id_carrera' => $request->id_carrera,
                'id_usuario' => $user
            ]);

        return redirect('/pensum')->with('success', 'Pensum actualizado con éxito');
    }

    public function inhabilitar($id)
    {
        $pensum = \App\Models\Pensum::find($id);
        if ($pensum) {
            $pensum->activo = 0;
            $pensum->save();

            return redirect()->back()->with('success', 'Pensum inhabilitado con éxito!');
        } else {
            return redirect()->back()->with('error', 'Pensum no encontrado.');
        }
    }
}
