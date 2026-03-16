<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home'); 


Route::get('/login', function () {
    return view('Login');
})->name('Login');

Route::get('/tablero', function () {
    return view('tablero');
})->name('tablero');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/config', function () {
    return view('config');
})->name('config');