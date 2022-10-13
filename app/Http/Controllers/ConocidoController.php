<?php

namespace App\Http\Controllers;

use App\Models\Conocido;
use Illuminate\Http\Request;

class ConocidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conocidos = Conocido::all();
        return view('conocidos.listar',compact('conocidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conocidos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = new Conocido();
        $nuevo->id = $request->input('id');
        $nuevo->nombre = $request->input('nombre');
        $nuevo->save();
        return redirect(route('conocidos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conocido = Conocido::find($id);

        return view('conocidos.mostrar',compact('conocido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conocido = Conocido::find($id);
        return view('conocidos.editar',compact('conocido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $conocido = Conocido::find($id);
        $conocido->id = $request->input('id');
        $conocido->nombre = $request->input('nombre');
        $conocido->save();
        return redirect(route('conocidos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Conocido::delete($id);
        return redirect(route('conocidos.index'));
    }
}
