<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistasLibreria;





Route::get('/',[vistasLibreria::class,'inicio']);

Route::get('Registro',[vistasLibreria::class,'viewRegistroL'])->name('Regibook');

Route::post('confirmarlibro', [vistasLibreria::class, 'GuardarLi'])->name('save');

Route::get('RegistroA',[vistasLibreria::class,'viewRegistroA'])->name('regiautor');

Route::post('confirmar', [vistasLibreria::class,'GuardarAu'])->name('save');



