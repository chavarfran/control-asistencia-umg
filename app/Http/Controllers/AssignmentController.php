<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    public function store(Request $request)
    {
        try {
            $selectedCourses = $request->input('selected_courses');

            $user = auth()->id();
            // Validar los datos del request si es necesario
            $request->validate([
                'id_catedratico' => 'required',
            ]);

            // Insertar en la base de datos
            foreach ($selectedCourses as $courseId) {
                DB::table('tb_assignment')->insert([
                    'id_catedratico' => $request->id_catedratico,
                    'id_curso' => $courseId,
                    'id_usuario' => $user,
                    'created_at' => Carbon::now()
                ]);
            }
            // Redireccionar o responder según lo que necesites
            return redirect('/asignacion')->with('success', 'Operación completada con éxito');
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->validator);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
