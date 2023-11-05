<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfesorController extends Controller
{
    public function store(Request $request)
    {
        $filenamephoto = null;
        $user = auth()->id();
        // Validar los datos del request si es necesario
        $request->validate([
            'primer_nombre' => 'required',
            'primer_apellido' => 'required',
            'dpi' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'email' => 'required',
            'codigo_catedratico' => 'required',
        ]);

        if($request->hasFile('foto')){
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $filenamephoto = $filename.'_'.time().'.'.$extension;
            $path = $request->file('foto')->storeAs('public/fotos', $filenamephoto);
        }


        // Insertar en la base de datos
        DB::table('tb_profesor')->insert([
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'primer_apellido' => $request->primer_apellido,
            'segundo_apellido' => $request->segundo_apellido,
            'dpi' => $request->dpi,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'codigo_catedratico' => $request->codigo_catedratico,
            'foto' => $filenamephoto,
            'id_municipio' => $request->id_municipio,
            'id_usuario' => $user,
            'created_at' => Carbon::now()
        ]);

        // Redireccionar o responder según lo que necesites
        return redirect('/catedratico')->with('success', 'Operación completada con éxito');
    }

    public function update(Request $request, $id)
    {
        $filenamephoto = null;
        $user = auth()->id();
        $request->validate([
            'primer_nombre' => 'required',
            'primer_apellido' => 'required',
            'dpi' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'email' => 'required',
            'codigo_catedratico' => 'required',
        ]);

        if($request->hasFile('foto')){
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $filenamephoto = $filename.'_'.time().'.'.$extension;
            $path = $request->file('foto')->storeAs('public/fotos', $filenamephoto);
        }else if($request->hasFile('foto_edit')){
            $filenameWithExt = $request->file('foto_edit')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_edit')->getClientOriginalExtension();
            $filenamephoto = $filename.'_'.time().'.'.$extension;
            $path = $request->file('foto_edit')->storeAs('public/fotos', $filenamephoto);
        }else if(!$request->hasFile('foto_edit')){
            $filenamephoto = $request->foto;
        }

        DB::table('tb_profesor')
            ->where('id', $id)
            ->update([
                'primer_nombre' => $request->primer_nombre,
                'segundo_nombre' => $request->segundo_nombre,
                'primer_apellido' => $request->primer_apellido,
                'segundo_apellido' => $request->segundo_apellido,
                'dpi' => $request->dpi,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'direccion' => $request->direccion,
                'codigo_catedratico' => $request->codigo_catedratico,
                'foto' => $filenamephoto,
                'id_municipio' => $request->id_municipio,
                'id_usuario' => $user,
            ]);

        return redirect('/catedratico')->with('success', 'Catedratico actualizado con éxito');
    }
}
