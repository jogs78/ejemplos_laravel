<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EntradaController extends Controller
{
    function login(){
        echo "introducir credenciales <a href='entrar'>ENTRAR</a>";
    }
    function entrar(){
        $user = User::find(1);
        Auth::login($user);
    }
    function salir(){
        Auth::logout();
    }


}
