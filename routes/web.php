<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');
Route::view('/usuarios-modal', 'usuarios-modal.index')->name('usuarios-modal');
Route::view('/usuarios-campos-dinamicos','usuarios-campos-dinamicos.index')->name('usuarios-campos-dinamicos');
Route::view('/usuarios-paginacion','usuarios-paginacion.index')->name('usuarios-paginacion');
Route::view('/usuarios-cargar-mas','usuarios-cargar-mas.index')->name('usuarios-cargar-mas');
Route::view('/multiples-imagenes','multiples-imagenes.index')->name('multiples-imagenes');
Route::view('/usuarios-buscar-paginacion','usuarios-buscar-paginacion.index')->name('usuarios-buscar-paginacion');

Auth::routes();