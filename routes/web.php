<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistasLibreria;
use App\Http\Controllers\controladorBD;
use App\Http\Controllers\controladorBDa;






Route::get('/',[vistasLibreria::class,'inicio']);

//Autores
Route::get('RegistroA/create', [ControladorBDa::class, 'create'])->name('registroa.create');

Route::get('Autor', [ControladorBDa::class, 'index'])->name('autor.index');

Route::post('autor', [ControladorBDa::class, 'store'])->name('autor.store');


Route::get('autor/{id}/edit', [ControladorBDa::class, 'edit'])->name('autor.edit');
Route::put('Autor/{id}', [ControladorBDa::class, 'update'])->name('autor.update');

Route::delete('autor/{id}', [ControladorBDa::class, 'destroy']) -> name('autor.destroy');







//Libros


Route::get('Registro',[vistasLibreria::class,'viewRegistroL'])->name('Regibook');

Route::get('Registro/create',[controladorBD::class,'create'])->name('Registro.create');


Route::post('confirmarlibro', [vistasLibreria::class, 'GuardarLi'])->name('save');

Route::get('RegistroA',[vistasLibreria::class,'viewRegistroA'])->name('regiautor');

Route::post('confirmar', [vistasLibreria::class,'GuardarAu'])->name('save');



