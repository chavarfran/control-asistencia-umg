<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->id();
        // Validar los datos del request si es necesario
        $request->validate([
            'nombre_curso' => 'required',
            'horario_inicio' => 'required',
            'horario_final' => 'required',
            'dia' => 'required',
            'id_pensum' => 'required|integer',
            'id_seccion' => 'required|integer'
        ]);

        // Insertar en la base de datos
        DB::table('tb_course')->insert([
            'nombre_curso' => $request->nombre_curso,
            'descripcion' => $request->descripcion,
            'horario_inicio' => $request->horario_inicio,
            'horario_final' => $request->horario_final,
            'dia' => $request->dia,
            'id_pensum' => $request->id_pensum,
            'id_seccion' => $request->id_seccion,
            'id_usuario' => $user,
            'created_at' => Carbon::now()
        ]);

        // Redireccionar o responder según lo que necesites
        return redirect('/curso')->with('success', 'Operación completada con éxito');
    }

    public function update(Request $request, $id)
    {
        $user = auth()->id();
        $request->validate([
            'nombre_curso' => 'required',
            'horario_inicio' => 'required',
            'horario_final' => 'required',
            'dia' => 'required',
            'id_pensum' => 'required|integer',
            'id_seccion' => 'required|integer'
        ]);

        DB::table('tb_course')
            ->where('id', $id)
            ->update([
                'nombre_curso' => $request->nombre_curso,
                'descripcion' => $request->descripcion,
                'horario_inicio' => $request->horario_inicio,
                'horario_final' => $request->horario_final,
                'dia' => $request->dia,
                'id_pensum' => $request->id_pensum,
                'id_seccion' => $request->id_seccion,
                'id_usuario' => $user,
            ]);

        return redirect('/curso')->with('success', 'Curso actualizado con éxito');
    }

    public function inhabilitar($id)
    {
        $course = \App\Models\Course::find($id);
        if ($course) {
            $course->activo = 0;
            $course->save();

            return redirect()->back()->with('success', 'Curso inhabilitado con éxito!');
        } else {
            return redirect()->back()->with('error', 'Curso no encontrado.');
        }
    }

    public function habilitar($id)
    {
        $course = \App\Models\Course::find($id);
        if ($course) {
            $course->activo = 1;
            $course->save();
            return redirect()->back()->with('success', 'Curso inhabilitado con éxito!');
        } else {
            return redirect()->back()->with('error', 'Curso no encontrado.');
        }
    }
}
