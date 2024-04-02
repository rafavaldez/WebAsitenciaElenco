<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\usuarios;
class LoginController extends Controller
{
    
    public function index()
    {
        
        return view('AccesoLoguin/index'); // Asegúrate de que el nombre de la variable en la vista coincida
    }
    public function loginform()
    {
        
        return view('AccesoLoguin/login'); // Asegúrate de que el nombre de la variable en la vista coincida
    }

    public function validar(Request $request)
    {
        

        $nickname = $request->input('email');
        $password = $request->input('password');

        
        $usuario = usuarios::where('nickname', $nickname)
        ->where('password', $password)
        ->first();

        if ($usuario) {
        // Las credenciales son válidas
            return response()->json(['message' => 'Credenciales válidas', 'estado' => $usuario->estado]);
        } else {
        // Las credenciales no son válidas
            return response()->json(['message' => 'Credenciales inválidas'], 401);
        }

        
    }
}
