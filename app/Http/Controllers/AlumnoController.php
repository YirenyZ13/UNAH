<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.Aindex', compact('alumnos'));
    }

    public function create()
    {
        return view('alumnos.Acreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cuenta' => 'required|unique:alumnos',
            'nombre' => 'required',
            'nota' => 'required|integer',
            'carrera' => 'required|in:Informatica Administrativa,cafetal,enfermería,administración de empresa,ingeniería'
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumnos.Aindex')
                         ->with('success', 'Alumno creado exitosamente.');
    }

    public function show($cuenta)
    {
        $alumno = Alumno::where('cuenta', $cuenta)->firstOrFail();
        return view('alumnos.Ashow', compact('alumno'));
    }

    public function edit($cuenta)
    {
        $alumno = Alumno::where('cuenta', $cuenta)->firstOrFail();
        return view('alumnos.Aedit', compact('alumno'));
    }

    public function update(Request $request, $cuenta)
    {
        $request->validate([
            'nombre' => 'required',
            'nota' => 'required|integer',
            'carrera' => 'required|in:Informatica Administrativa,cafetal,enfermería,administración de empresa,ingeniería'
        ]);

        $alumno = Alumno::where('cuenta', $cuenta)->firstOrFail();
        $alumno->update($request->all());

        return redirect()->route('alumnos.Aindex')
                         ->with('success', 'Datos del alumno actualizados exitosamente.');
    }

    public function destroy($cuenta)
    {
        $alumno = Alumno::where('cuenta', $cuenta)->firstOrFail();
        $alumno->delete();

        return redirect()->route('alumnos.Aindex')
                         ->with('success', 'Alumno eliminado exitosamente.');
    }
}
