<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');
Route::view('/usuarios', 'usuarios.index')->name('usuarios');

Auth::routes();