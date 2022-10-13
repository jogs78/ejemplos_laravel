<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class Arreglo
{
    public function handle(Request $request, Closure $next)
    {
        //checar si se cumple algun requisito
        $datos = session('datos', "nada");
        if ($datos == "nada" ) return redirect('no');
        return $next($request);
    }
}
