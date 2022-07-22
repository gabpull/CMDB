<?php

use App\Http\Controllers\TbEdificioController;
use App\Http\Controllers\TbMarcaController;
use App\Http\Controllers\TbModeloController;
use App\Http\Controllers\TbPisoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dash.index');
    })->name('dash');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*  Route::get('/edificios/crear', function () {
        return view('forms.create');
    })->name('crear'); */


/* Route::controller(TbEdificioController::class)->group(function () {

    Route::middleware('auth')->group(function () {
        Route::get('/pisos', 'show');
        Route::get('/edificios', 'show');
        Route::get('/edificios/crear', 'create');
        Route::post('/edificios/creado', 'store');
        Route::get('/edificios/{edificio}/editar', 'edit');
        Route::patch('/edificios/{edificio}', 'update');
        Route::delete('/edificios/{edificio}', 'destroy');
    });
});
 */

Route::middleware('auth')->group(function () {
    Route::controller(TbPisoController::class)->group(function () {
        Route::get('/pisos', 'show');
        Route::get('/pisos/crear', 'create');
        Route::post('/pisos/creado', 'store');
        Route::get('/pisos/{piso}/editar', 'edit');
        Route::patch('/pisos/{piso}', 'update');
        Route::delete('/pisos/{piso}', 'destroy');
    });
    Route::controller(TbEdificioController::class)->group(function () {
        Route::get('/edificios', 'show');
        Route::get('/edificios/crear', 'create');
        Route::post('/edificios/creado', 'store');
        Route::get('/edificios/{edificio}/editar', 'edit');
        Route::patch('/edificios/{edificio}', 'update');
        Route::delete('/edificios/{edificio}', 'destroy');
    });
    Route::controller(TbMarcaController::class)->group(function () {
        Route::get('/marcas', 'show'); //listo
        Route::get('/marcas/crear', 'create');//listo
        Route::post('/marcas/creado', 'store');//listo
        Route::get('/marcas/{marca}/editar', 'edit');//listo
        Route::patch('/marcas/{marca}', 'update');//listo
        Route::delete('/marcas/{marca}', 'destroy');
    });
    Route::controller(TbModeloController::class)->group(function () {
        Route::get('/modelos', 'show');
        Route::get('/modelos/crear', 'create');
        Route::post('/modelos/creado', 'store');
        Route::get('/modelos/{modelo}/editar', 'edit');
        Route::patch('/modelos/{modelo}', 'update');
        Route::delete('/modelos/{modelo}', 'destroy');
    });

});









/* Route::middleware('auth')->group(function () {

    Route::resource('/edificios', TbEdificioController::class);
    Route::resource('/edificios/crear', TbEdificioController::class);
}); */
