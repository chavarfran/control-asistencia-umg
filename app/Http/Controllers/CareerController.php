<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
    public function store(Request $request)
    {
        try {
            $user = auth()->id();
        
            // Validar los datos del request si es necesario
            $request->validate([
                'nombre_carrera' => 'required',
                'descripcion' => 'required',
                'id_facultad' => 'required|integer',
            ]);
        
            // Insertar en la base de datos
            DB::table('tb_career')->insert([
                'nombre_carrera' => $request->nombre_carrera,
                'descripcion' => $request->descripcion,
                'id_facultad' => $request->id_facultad,
                'id_usuario' => $user,
            ]);
        
            // Redireccionar o responder según lo que necesites
            return redirect('/carrera')->with('success', 'Operación completada con éxito');
        
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Captura errores de validación
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            // Captura cualquier otra excepción
            return back()->with('error', 'Hubo un error al añadir la registro: ' . $e->getMessage());
        }
    }
}
