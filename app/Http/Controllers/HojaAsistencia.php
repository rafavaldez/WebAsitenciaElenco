<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hoja_asistencia;
use App\Models\estudiante;
use Illuminate\Support\Facades\DB;

class HojaAsistencia extends Controller
{
    public function agregar(Request $request)
    {
        try {

            $validar = hoja_asistencia::where('codigo', $request->codigo)
                            ->where('dias_asistencia_id', $request->id_fecha)
                            ->first();
            if ($validar) {
                return response()->json("Ya se ingreso");
            }
            else{
                
                $estudiante = Estudiante::where('codigou', $request->codigo)->firstOrFail();
    
                // Si se encuentra un estudiante con el código proporcionado
                // Realiza las acciones que necesites hacer aquí
                $asistencia = new hoja_asistencia();
                $asistencia->estudiantes_id = $estudiante->id;
                $asistencia->dias_asistencia_id = $request->id_fecha;
                $asistencia->hora = date('H:i');
                $asistencia->codigo = $estudiante->codigou;
                $asistencia->save();


                // Obtener todos los estudiantes con asistencia para la hoja de asistencia actual
                $estudiantesConAsistencia = Estudiante::join('hoja_asistencia', 'estudiantes.id', '=', 'hoja_asistencia.estudiantes_id')
                ->where('hoja_asistencia.dias_asistencia_id', $request->id_fecha)
                ->get();

                // Crear un array asociativo con los datos a enviar
                $response = [
                    'estudiante' => $estudiante,
                    'estudiantesConAsistencia' => $estudiantesConAsistencia
                ];

                // Convertir el array en formato JSON y devolverlo como respuesta
                return response()->json($response);
            }



            
        } catch (\Exception $e) {
            // Si ocurre una excepción, devuelve un JSON con un mensaje de error y un código de estado 404
            return response()->json(['error' => $e->getMessage()], 404);
        }
        //$asistencia->Nombres=$request->Nombres;
        //$asistencia->codigou=$request->codigou;
        //$asistencia->telefono=$request->telefono;
        //$asistencia->fechadenacimiento=$request->fechadenacimiento;
        //$asistencia->escuela=$request->escuela;    
    }
}
