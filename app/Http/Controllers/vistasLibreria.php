<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarLibro;
use Illuminate\Http\Request;




class vistasLibreria extends Controller
{
    public function inicio(){
        return view('Welcome');

    }

    public function viewRegistroL(){
        return view('Registro');

    }

    public function GuardarLi(validarLibro $req){
        return redirect('Registro')->with('Finalizado', 'Libro Guardado');
    }
}
