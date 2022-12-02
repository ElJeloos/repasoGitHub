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
Route::get('Registro/create', [ControladorBD::class, 'create'])->name('registrol.create');

Route::get('libro', [ControladorBD::class, 'index'])->name('libro.index');

Route::post('libro', [ControladorBD::class, 'store'])->name('libro.store');

Route::get('libro/{id}/edit', [ControladorBD::class, 'edit'])->name('libro.edit');

Route::put('libro/{id}', [ControladorBD::class, 'update'])->name('libro.update');

Route::delete('libro/{id}', [ControladorBD::class, 'destroy']) -> name('libro.destroy');



