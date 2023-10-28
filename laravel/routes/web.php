<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;

//Rutas inidividuales para controlador
Route::get('/',[diarioController::class,'metodoInicio'] )->name('apodoInicio');

Route::get('/formulario',[diarioController::class,'metodoFormulario'] )->name('apodoFormulario');

Route::get('/recuerdos',[diarioController::class,'metodoRecuerdos'] )->name('apodoRecuerdos');

Route::post('/guardarRecuerdo',[diarioController::class,'metodoGuardar'] )->name('guardar');


//Rutas Agrupadas tipo Controlador
/*
Route::controller(diarioController::class)->group(function (){
    Route::get('/','metodoInicio')-> name('apodoInicio');
    Route::get('/formulario','metodoFormulario')-> name('apodoFormulario');
    Route::get('/recuerdos','metodoRecuerdos')-> name('apodoRecuerdos');
} );
*/

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/* Route::view('/', 'welcome')-> name("ApodoInicio");
Route::view('/formulario', 'formulario')-> name("apodoFormulario");
Route::view('/recuerdos', 'recuerdos')-> name ("apodoRecuerdos"); RUTAS PARALIZADAS MOMENTANEAMENTE */

 