<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "Luis";
        $alumnos =['Ximena', 'Perez', 'Sergio', 'Evelyn', 'Dani', 'Juan', 'David', 'Kyan', 'Eitan', 'Adrian', 'Leo'];
        return view('bienvenido', compact('nombre', 'alumnos'));
    }
}
