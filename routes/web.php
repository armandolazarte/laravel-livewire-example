<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');
Route::view('/usuarios-modal', 'usuarios-modal.index')->name('usuarios-modal');
Route::view('/usuarios-campos-dinamicos','usuarios-campos-dinamicos.index')->name('usuarios-campos-dinamicos');

Auth::routes();