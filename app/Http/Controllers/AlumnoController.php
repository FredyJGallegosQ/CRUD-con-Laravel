<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use DB;
class AlumnoController extends Controller
{
    public function displayform()
    {
        return view('index');
    }
    public function save(Request $request)
    {
        $alumno = new Alumno();
        $alumno->cod_estudiante = $request->codigo;
        $alumno->nombres = $request->nombres;
        $alumno->apellidos = $request->apellidos;
        $alumno->dni = $request->dni;
        $alumno->save();
        //return redirect()->route('alumnos.index');
        return redirect('alumno')->with('success', 'Data saved');
    }
    public function view()
    {
        return view('view');
    }
    public function index(){

        //return DB::select("select * from alumnos");
        $alumnos = Alumno::all();
        return view('view',compact('alumnos'));

    }
    public function edit($cod_estudiante)
    {
        $alumnos = DB::select('select * from Alumnos where cod_estudiante = ?', [$cod_estudiante]);
        return view('edit',['alumnos'=>$alumnos]);
    }
    public function update(Request $request, $cod_estudiante)
    {
        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $dni = $request->input('dni');
        DB::update('update Alumnos set nombres = ?, apellidos = ?, dni = ? where cod_estudiante = ?',
        [$nombres, $apellidos, $dni, $cod_estudiante]);
        return redirect('view')->with('success', 'Data Update');
    }
    public function delete($cod_estudiante)
    {
        DB::delete('delete from Alumnos where cod_estudiante = ?', [$cod_estudiante]);
        return redirect('view')->with('success', 'Delete data');
    }
}
