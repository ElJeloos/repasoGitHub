<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_autores;
use App\Models\tb_libros;
use App\Http\Requests\validarLibro;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{

    public function index()
    {
        $ConsultaL= DB::table('tb_libros')->get();
        return view ('VerL', compact('ConsultaL'));
    }


    public function create()
    {
        $categorias = tb_autores::all();
        return view('Registro', compact('categorias'));

    }


    public function store(validarLibro $request)
    {
        DB::table('tb_libros')->insert([
            
            "ISBN"=> $request->input('numISBN'),
            "Titulo"=> $request->input('txtTittle'),            
            "id_autor"=> $request->input('txtAutor'),
            "numPag"=> $request->input('numPaginas'),
            "Editorial"=> $request->input('txtEditorial'),
            "Correo"=> $request->input('txtCorreo'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);

        $tit = $request->input('txtTitulo');

        return redirect('Registro/create')->with('finalizado', 'Libro Guardado') -> with('Vari', $tit);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $consultaId = DB::table('tb_libros')->where('idLibro',$id)->first();
        return view('EditarL', compact('consultaId'));
    }


    public function update(validarLibro $request, $id)
    {
        DB::table('tb_libros')->where('idLibro', $id)->update([

            "ISBN"=> $request->input('numISBN'),
            "Titulo"=> $request->input('txtTittle'),            
            "id_autor"=> $request->input('txtAutor'),
            "numPag"=> $request->input('NumPaginas'),
            "Editorial"=> $request->input('txtEditorial'),
            "Correo"=> $request->input('txtEmail'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);

        return redirect('Libro')->with('Actualizar', 'Libro Actualizado');
    }


    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibro', $id)->delete();
        return redirect('Libro')->with('EliminarL', 'Libro Eliminado');
    }
}
