<?php

use Illuminate\Support\Facades\Route;

$baseRoute = 'layouts.areas';

/* Route::get('/', function () {
    return view('welcome');
}); */

//home
Route::resource('/', 'ClienteController')->only(['index', 'store'])->name('index','welcome');

### Areas ###

Route::view('/gestion', $baseRoute.'.gestion')->name('gestion');
Route::view('/geologia', $baseRoute.'.geologia')->name('geologia');
Route::view('/metalurgia', $baseRoute.'.metalurgia')->name('metalurgia');
Route::view('/mineria', $baseRoute.'.mineria')->name('mineria');
Route::view('/medioambiente', $baseRoute.'.medioambiente')->name('medioambiente');
Route::view('/seguridadminera', $baseRoute.'.seguridadminera')->name('seguridadminera');
Route::view('/derechominero', $baseRoute.'.derechominero')->name('derechominero');

Route::view('/ingenieria-geotecnica', $baseRoute.'.ingenieriageotecnica')->name('ingenieriageotecnica');
Route::view('/operaciones-mineras', $baseRoute.'.operacionesmineras')->name('operacionesmineras');


//thanks register
Route::view('/thanks', 'thanks')->name('thanks');