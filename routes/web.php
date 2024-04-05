<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/puntos-recoleccion', function() {
    return view('puntosRecoleccion');} 
)->name('irPuntosRecoleccion');

Route::get('/mis-recolecciones', function() {
    return view('misRecolecciones');} 
)->name('irMisRecolecciones');

Route::get('/lista-empresas', function() {
    return view('listaEmpresas');} 
)->name('irListaEmpresas');

Route::get('/lista-usuarios', function() {
    return view('listaUsuarios');} 
)->name('irListaUsuarios');

