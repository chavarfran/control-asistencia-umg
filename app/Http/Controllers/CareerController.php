<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
                'created_at' => Carbon::now(),
            ]);
        
            // Redireccionar o responder según lo que necesites
            return redirect('/carrera')->with('success', 'Operación completada con éxito');
        
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un error al añadir la registro: ' . $e->getMessage());
        }
    }
    
    public function update(Request $request, $id)
    {
        try {
            $user = auth()->id();
            $request->validate([
                'nombre_carrera' => 'required',
                'descripcion' => 'required',
                'id_facultad' => 'required|integer',
            ]);

            DB::table('tb_career')
                ->where('id', $id)
                ->update([
                    'nombre_carrera' => $request->nombre_carrera,
                    'descripcion' => $request->descripcion,
                    'id_facultad' => $request->id_facultad,
                    'id_usuario' => $user,
                ]);
        
            // Redireccionar o responder según lo que necesites
            return redirect('/carrera')->with('success', 'Operación completada con éxito');
        
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un error al añadir la registro: ' . $e->getMessage());
        }
    }

    public function inhabilitar($id)
    {
        $career = \App\Models\Career::find($id);
        if ($career) {
            $career->activo = 0;
            $career->save();

            return redirect()->back()->with('success', 'Carrera inhabilitado con éxito!');
        } else {
            return redirect()->back()->with('error', 'Carrera no encontrado.');
        }
    }

    public function habilitar($id)
    {
        $career = \App\Models\Career::find($id);
        if ($career) {
            $career->activo = 1;
            $career->save();
            return redirect()->back()->with('success', 'Carrera inhabilitado con éxito!');
        } else {
            return redirect()->back()->with('error', 'Carrera no encontrado.');
        }
    }
}
