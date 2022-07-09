<?php

use App\Http\Controllers\TbEdificioController;
use App\Policies\TbEdificioPolicy;
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


Route::controller(TbEdificioController::class)->group(function () {

    Route::middleware('auth')->group(function () {
        Route::get('/edificios', 'show');
        Route::get('/edificios/crear', 'create');
        Route::post('/edificios/creado', 'store');

    });
});



/* Route::middleware('auth')->group(function () {

    Route::resource('/edificios', TbEdificioController::class);
    Route::resource('/edificios/crear', TbEdificioController::class);
}); */
