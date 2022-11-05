<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarLibro;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;





class vistasLibreria extends Controller
{
    public function inicio(){
        return view('Welcome');

    }

    public function viewRegistroL(){
        return view('Registro');

    }

    public function GuardarLi(validarLibro $req){

        $name=$req ->input('txtTittle');


        return redirect('Registro')->with('Finalizado', 'Libro Guardado')->with('Variable',$name);

    }
}
