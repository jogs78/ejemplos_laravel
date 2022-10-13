<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;
class Conocido{
    public $id;
    public $nombre;

    static public function all(){
        return session('datos',[ 0=>"Hugo", 1=>"Paco", 2=>"Luis" ]);
    }
    public function save(){
        $datos = session('datos',[]);
        $datos[$this->id]=$this->nombre;
        session(['datos' => $datos]);
    }
    static public function  find($id){
        $datos = session('datos',[]);
        $nuevo = new Conocido();
        $nuevo->id = $id;
        $nuevo->nombre = $datos[$id];
        return $nuevo;
    }
    static public function delete($id){
        $datos = session('datos',[]);
        unset($datos[$id]);
        session(['datos' => $datos]);

    }
}