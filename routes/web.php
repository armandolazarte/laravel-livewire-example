<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');
Route::view('/usuarios-modal', 'usuarios-modal.index')->name('usuarios-modal');
Route::view('/usuarios-registro-login', 'usuarios-registro-login.index')->name('usuarios-registro-login');
Route::view('/usuarios-campos-dinamicos','usuarios-campos-dinamicos.index')->name('usuarios-campos-dinamicos');
Route::view('/usuarios-paginacion','usuarios-paginacion.index')->name('usuarios-paginacion');
Route::view('/usuarios-cargar-mas','usuarios-cargar-mas.index')->name('usuarios-cargar-mas');
Route::view('/multiples-imagenes','multiples-imagenes.index')->name('multiples-imagenes');
Route::view('/usuarios-buscar-paginacion','usuarios-buscar-paginacion.index')->name('usuarios-buscar-paginacion');
Route::view('/usuarios-crud','usuarios-crud.index')->name('usuarios-crud');
Route::view('/subir-archivo','subir-archivo.index')->name('subir-archivo');
Route::view('/subir-imagen','subir-imagen.index')->name('subir-imagen');
Route::view('/dropdowns','dropdowns.index')->name('dropdowns');
Route::view('/dropdowns-ciudades','dropdowns-ciudades.index')->name('dropdowns-ciudades');

Route::livewire('/galaxies', 'galaxy.index')->name('galaxies');
Route::view('/dependant-select', 'dependant-select.index')->name('dependant-select');

Route::get('modal','ModalController@index')->name('modal');
Route::post('modal','ModalController@store')->name('modal.store');

Auth::routes();