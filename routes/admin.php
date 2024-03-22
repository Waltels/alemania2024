<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserConstroller;
use App\Http\Controllers\Admin\FileController;


Route::get('', [HomeController::class, 'index'])->middleware('can:Administrador')->name('home');

Route::resource('roles', RoleController::class)->middleware('can:Administrador')->names('roles');

Route::resource('users', UserConstroller::class)->middleware('can:Administrador')->only('index', 'edit', 'update')->names('users');



/*RUTAS DIRECTOR*/
Route::resource('files', FileController::class)->only('index', 'edit', 'update')->names('files');