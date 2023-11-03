<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->id();
        // Validar los datos del request si es necesario
        $request->validate([
            'nombre_seccion' => 'required',
            'id_carrera' => 'required|integer',
            'id_semestre' => 'required|integer'
        ]);

        // Insertar en la base de datos
        DB::table('tb_section')->insert([
            'nombre_seccion' => $request->nombre_seccion,
            'id_carrera' => $request->id_carrera,
            'id_semestre' => $request->id_semestre,
            'id_usuario' => $user,
            'created_at' => Carbon::now()
        ]);

        // Redireccionar o responder según lo que necesites
        return redirect('/seccion')->with('success', 'Operación completada con éxito');
    }

    public function update(Request $request, $id)
    {
        $user = auth()->id();
        $request->validate([
            'nombre_seccion' => 'required',
            'id_carrera' => 'required|integer',
            'id_semestre' => 'required|integer',
        ]);

        DB::table('tb_section')
            ->where('id', $id)
            ->update([
                'nombre_seccion' => $request->nombre_seccion,
                'id_carrera' => $request->id_carrera,
                'id_semestre' => $request->id_semestre,
                'id_usuario' => $user
            ]);

        return redirect('/seccion')->with('success', 'Sección actualizado con éxito');
    }

    public function inhabilitar($id)
    {
        $section = \App\Models\Section::find($id);
        if ($section) {
            $section->activo = 0;
            $section->save();

            return redirect()->back()->with('success', 'Semestre inhabilitado con éxito!');
        } else {
            return redirect()->back()->with('error', 'Semestre no encontrado.');
        }
    }

    public function habilitar($id)
    {
        $section = \App\Models\Section::find($id);
        if ($section) {
            $section->activo = 1;
            $section->save();
            return redirect()->back()->with('success', 'Semestre inhabilitado con éxito!');
        } else {
            return redirect()->back()->with('error', 'Semestre no encontrado.');
        }
    }
}
