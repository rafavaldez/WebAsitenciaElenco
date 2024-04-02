<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    //
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('home', ['estudiantes' => $estudiantes]); // Asegúrate de que el nombre de la variable en la vista coincida
    }
}
