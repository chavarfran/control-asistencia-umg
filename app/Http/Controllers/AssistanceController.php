<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AssistanceController extends Controller
{
    public function store(Request $request)
    {
        try {
            //dd($request->all());
            $user = auth()->id();
            $now = Carbon::now();

            // Validar los datos del request si es necesario
            $request->validate([
                'id_catedratico' => 'required',
                'id_curso' => 'required',
                'id_tema' => 'required',
                'hora_salida' => 'required',
            ]);

            // Insertar en la base de datos
            DB::table('tb_assistance')->insert([
                'hora_entrada' => $now->format('H:i:s'),
                'hora_salida' => $request->hora_salida,
                'id_catedratico' => $request->id_catedratico,
                'ubicacion' => $request->latitude.','.$request->longitude,
                'id_curso' => $request->id_curso,
                'id_tema' => $request->id_tema,
                'id_usuario' => $user,
                'created_at' => Carbon::now(),
            ]);

            // Redireccionar o responder según lo que necesites
            return redirect('/asistencia/formulario')->with('success', 'Operación completada con éxito');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un error al añadir la registro: ' . $e->getMessage());
        }
    }
}
