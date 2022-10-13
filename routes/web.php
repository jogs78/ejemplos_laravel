<?php

use App\Http\Controllers\ConocidoController;
use App\Http\Controllers\EntradaController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;


use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('saludar/{nombre?}',function ($x="desconocido"){
    echo "hola $x";
});

Route::get('entrar',[SesionController::class, 'entrar']);
Route::post('validar',[SesionController::class, 'validar']);

Route::get('asd/{nombre}',function ($x){
    $titulo = session('titulo');
    $x = $titulo . ". " . $x;
    return view('ejemplo.asignar',compact('x'));
})->name('asig');
Route::get('xyz/{nombre}',function ($x){
    $titulo = session('titulo');
    $x = $titulo . ". " . $x;
    return view('ejemplo.desasignar',compact('x'));
})->name('des');

Route::get('guardar/{titulo}',function ($x){
    session(['titulo' => $x]);
    echo "guardado....";
});
/*
Route::get('conocidos',[ConocidoController::class,'index'])->name('conocidos.index')->middleware('checar');
Route::get('conocidos/create',[ConocidoController::class,'create'])->name('conocidos.create');
Route::post('conocidos',[ConocidoController::class,'store'])->name('conocidos.store');
Route::get('conocidos/{cual}',[ConocidoController::class,'show'])->name('conocidos.show');
Route::get('conocidos/edit/{cual}',[ConocidoController::class,'edit'])->name('conocidos.edit');
Route::put('conocidos/{cual}',[ConocidoController::class,'update'])->name('conocidos.update');
Route::delete('conocidos/{cual}',[ConocidoController::class,'destroy'])->name('conocidos.destroy');
*/
Route::resource('conocidos',ConocidoController::class)->middleware('auth');;

Route::resource('canciones',ConocidoController::class);

Route::get('no',function (){
    echo "No ahy lista.";
});


Route::get('login',[EntradaController::class,'login'])->name('login');
Route::get('entrar',[EntradaController::class,'entrar'])->name('entrar');
Route::get('salir',[EntradaController::class,'salir'])->name('salir');
