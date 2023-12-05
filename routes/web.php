<?php

use App\Http\Controllers\ApartamentosController;
use App\Http\Controllers\CuotasController;
use App\Http\Controllers\DuenioController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InquilinosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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

Route::get('/',[InicioController::class, 'index'])->name('inicio');


Route::get('/apartamentos/newapart',[ApartamentosController::class, 'crear'])->name('apartamento.crear');

Route::get('/apartamentos/showapart',[ApartamentosController::class, 'mostrar'])->name('apartamento.show');

Route::get('/apartamentos/verapart',[ApartamentosController::class, 'ver'])->name('apartamento.ver');



Route::get('/apartamentos/agregar',[ApartamentosController::class, 'agregar'])->name('apartamento.agregar');

//cuota
Route::get('/cuotas/index',[CuotasController::class, 'index'])->name('cuotas.all');

Route::get('/cuotas/dueno',[CuotasController::class, 'cuotasDueno'])
    ->name('cuotas.dueno');

Route::get('/cuotas/inquilino',[CuotasController::class, 'cuotasInquilino'])
    ->name('cuotas.inquilino');

Route::get('/cuotas/apartamento',[CuotasController::class, 'cuotasApartamento'])
    ->name('cuotas.apartamento');

Route::get('/cuotas/crear', [CuotasController::class, 'crear'])->name('cuotas.crear');

Route::get('/cuotas/cancelar', [CuotasController::class, 'cancelar'])->name('cuotas.cancelar');

Route::post('/cuotas/nueva', [CuotasController::class, 'nueva'])->name('cuotas.nueva');

//duenos
Route::get('/duenos',[DuenioController::class,'index'])
    ->name('dueno.home');

Route::get('/duenos/nuevo', function () {
    return view("DueniosCrear");
})
    ->name('dueno.nuevo');

Route::post('/duenos/crear', [DuenioController::class, "create"])
    ->name('dueno.crear');

Route::get('dueno/buscar',[DuenioController::class,'buscar'])->name('dueno.buscar');


Route::delete('dueno/destroy/{idDueno}',[DuenioController::class,'destroy'])->name('dueno.destroy');


//inquilinos
Route::get('/inquilinos/mostrar', [InquilinosController::class, 'mostrar'])->name('inquilinos.mostrar');
Route::get('/inquilinos/crear', [InquilinosController::class, 'crear'])->name('inquilinos.crear');
Route::post('/inquilinos/nueva', [InquilinosController::class, 'nueva'])->name('inquilinos.nueva');

Route::post('/inquilinos/guardar', [InquilinosController::class, 'store'])->name('inquilinos.guardar');
Route::get('/inquilinos/eliminar/{idInquilino}', [InquilinosController::class, 'destroy'])->name('inquilinos.eliminar');

Route::get('/inquilinos/show/{idInquilino}', [InquilinosController::class, 'show'])->name('inquilinos.show');
