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
});

Route::get('/apartamentos/inicio',[InicioController::class, 'inicio'])->name('inicio.ver');
Route::get('/apartamentos/dos',[InicioController::class, 'index'])->name('inicio.index');


Route::get('/apartamentos/newapart',[ApartamentosController::class, 'crear'])->name('apartamento.crear');

Route::get('/apartamentos/showapart',[ApartamentosController::class, 'mostrar'])->name('apartamento.show');

Route::get('/apartamentos/verapart',[ApartamentosController::class, 'ver'])->name('apartamento.ver');



Route::get('/apartamentos/agregar',[ApartamentosController::class, 'agregar'])->name('apartamento.agregar');

//cuota
Route::get('/cuotas/index',[CuotasController::class, 'index'])->name('cuotas.all');

Route::get('/cuotas/crear', [CuotasController::class, 'crear'])->name('cuotas.crear');

//inquilinos
Route::get('/inquilinos/mostrar', [InquilinosController::class, 'obtenerTodos'])->name('inquilinos.mostrar');
Route::get('/inquilinos/crear', [InquilinosController::class, 'crear'])->name('inquilinos.crear');
