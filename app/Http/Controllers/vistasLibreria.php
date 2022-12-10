<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarLibro;
use App\Http\Requests\validarAutor;
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

    public function viewRegistroA(){
        return view('RegistroA');

    }

    public function GuardarLi(validarLibro $req){

        $name=$req ->input('txtTittle');


        return redirect('Registro')->with('Finalizado', 'Libro Guardado')->with('Variable',$name);
    }


    public function GuardarAu(validarAutor $req){

        $name=$req ->input('nolibros');


        return redirect('RegistroA')->with('Finalizado', 'Autor Guardado')->with('Variable',$name);



    }
}
