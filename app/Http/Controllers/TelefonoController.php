<?php

namespace App\Http\Controllers;

use App\Models\Telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    public function showTelefonos($cuenta)
    {
        $telefonos = Telefono::where('alumno_id', $cuenta)->get();

        return view('alumnos.telefonos', compact('telefonos'));
    }
}
