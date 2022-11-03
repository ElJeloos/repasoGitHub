<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistasLibreria;





Route::get('/',[vistasLibreria::class,'inicio']);

Route::get('Registro',[vistasLibreria::class,'viewRegistroL'])->name('Regibook');

Route::post('confirmarlibro', [vistasLibreria::class, 'GuardarLi'])->name('save');



