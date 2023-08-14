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
})->name('comeco');

Route::get('/sistemaprincipal', function () {
    return view('sistema');
})->name('sistemaprincipal');

Route::get('/geradorPlanilha', function () {
    return view('geradorxlsx');
})->name('geradorxlsx');

Route::get('/calculadora', function () {
    return view('calculadora');
})->name('calculadora');

Route::get('/processar-registro', function () {
    return view('processar_registro');
})->name('processar.registro');

Route::get('/processar-recebimento', function () {
    return view('processar_recebimento');
})->name('processar.recebimento');

Route::get('/login', function () {
    return view('login');
})->name('tela-de-login');
