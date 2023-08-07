<?php

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
    return view('welcome');
});

Route::get('/sistemaprincipal', function () {
    return view('sistema');
})->name('sistemaprincipal');

Route::get('/geradorPlanilha', function () {
    return view('geradorxlsx');
});

Route::get('/calculadora', function () {
    return view('calculadora');
})->name('calculadora');
