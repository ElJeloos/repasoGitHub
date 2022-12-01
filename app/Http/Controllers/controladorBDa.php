<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarAutor;
use DB;
use Carbon\Carbon;


class controladorBDa extends Controller
{

    public function index()
    {
        $ConsultaA= DB::table('tb_autores')->get();
        return view ('VerA', compact('ConsultaA'));
    }


    public function create()
    {
        return view('RegistroA');
    }


    public function store(validarAutor $request)
    {
        DB::table('tb_autores')->insert([
            "Nombre"=> $request->input('txtnombre'),
            "fecha"=> $request->input('ffecha'),
            "numPag"=> $request->input('nolibros'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()

        ]);
        return redirect('Autor')->with('confirmarA','Autor Guardado');
    }


    public function show($id)
    {
        $consultaId = DB::table('tb_autores')->where('idAutor',$id)->first();
        return view('EliminarA', compact('consultaId'));
    }


    public function edit($id)
    {
        $consultaId = DB::table('tb_autores')->where('idAutor',$id)->first();
        return view('EditarA', compact('consultaId'));
    }


    public function update(validarAutor $request, $id)
    {
        DB::table('tb_autores')->where('idAutor', $id)->update([
            "Nombre"=> $request->input('txtnombre'),
            "fecha"=> $request->input('ffecha'),
            "numPag"=> $request->input('nolibros'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()

        ]);
        return redirect('Autor')->with('ActualizarA', 'Autor Actualizado');
    }


    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutor', $id)->delete();
        return redirect('VerA')->with('EliminarA', 'Recuerdo Eliminado');
    }
}
