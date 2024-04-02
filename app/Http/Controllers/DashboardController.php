<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dias_asistencia;
use App\Models\hoja_asistencia;
use App\Models\Estudiante;
class DashboardController extends Controller
{
    //

    public function index()
    {
        $estudiantes = dias_asistencia::all();
        return view('Dashboard/dash', ['estudiantes' => $estudiantes]);
        
    }

    public function agregar(Request $request)
    {
        $asistencia=new dias_asistencia();
        $asistencia->fecha=$request->fecha;
        
        $asistencia->save();

        // Obtener todos los registros de asistencia
        $registrosAsistencia = dias_asistencia::all();

        // Devolver los registros de asistencia en formato JSON como respuesta
        return response()->json($registrosAsistencia);
        
    }

    public function view($id)
    {
        try {
            // Obtener la información de la asistencia basada en el ID proporcionado
            $asistencia = dias_asistencia::find($id);
    
            $estudiantesConAsistencia = Estudiante::join('hoja_asistencia', 'estudiantes.id', '=', 'hoja_asistencia.estudiantes_id')
                ->where('hoja_asistencia.dias_asistencia_id', $asistencia->id)
                ->get();
    
            // Pasar los datos a la vista
            return view('Dashboard/lista', ['asistencia' => $asistencia, 'estudiantesConAsistencia' => $estudiantesConAsistencia]);
        } catch (\Exception $e) {
            // Si ocurre una excepción, puedes manejarla aquí
            return response()->json(['error' => $e->getMessage()], 404);
        }
        
    }

    



}
