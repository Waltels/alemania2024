<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Files\HomeController;
use App\Http\Controllers\Files\FilesController;

/*RUTA DE ARCHIVOS*/
Route::get('', [HomeController::class, 'index'])->middleware('can:Profesor')->name('file');
Route::post('update', [FilesController::class, 'store'])->middleware('can:Profesor')->name('update');




/*RUTA DE UE ALEMANIA*/
Route::get('/alemania', function () {
    return view('alemania');
})->name('alemania');