<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserConstroller;


Route::get('', [HomeController::class, 'index'])->middleware('can:Administrador')->name('home');

Route::resource('roles', RoleController::class)->middleware('can:Administrador')->names('roles');

Route::resource('users', UserConstroller::class)->middleware('can:Administrador')->only('index', 'edit', 'update')->names('users');