<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    //
    function entrar(){
        return view('entrada');
    }
    function validar(Request $peticion) {
        $variableNombre = $peticion->input('nombre');
        $variableClave = $peticion->input('clave');
        $mensaje = "";
         
        if($variableNombre == "admin") 
            $mensaje = "Logeado como admin";
        else
            $mensaje = "Logeado como usuario";
    
        return view('entrada.resultado',compact('mensaje'));
    }
}
