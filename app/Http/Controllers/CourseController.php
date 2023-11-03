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
            'descripcion' => 'required',
            'horario' => 'required',
            'dia' => 'required',
            'id_pensum' => 'required|integer',
            'id_seccion' => 'required|integer'
        ]);

        // Insertar en la base de datos
        DB::table('tb_course')->insert([
            'nombre_curso' => $request->nombre_curso,
            'descripcion' => $request->descripcion,
            'horario' => $request->horario,
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
            'descripcion' => 'required',
            'horario' => 'required',
            'dia' => 'required',
            'id_pensum' => 'required|integer',
            'id_seccion' => 'required|integer'
        ]);

        DB::table('tb_course')
            ->where('id', $id)
            ->update([
                'nombre_curso' => $request->nombre_curso,
                'descripcion' => $request->descripcion,
                'horario' => $request->horario,
                'dia' => $request->dia,
                'id_pensum' => $request->id_pensum,
                'id_seccion' => $request->id_seccion,
                'id_usuario' => $user,
            ]);

        return redirect('/curso')->with('success', 'Curso actualizado con éxito');
    }
}
