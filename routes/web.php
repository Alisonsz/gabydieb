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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/curso', function () {
    return view('curso');
})->name('curso');
Route::middleware(['auth:sanctum', 'verified'])->get('/atendimentos', function () {
    return view('atendimentos');
})->name('atendimentos');
Route::middleware(['auth:sanctum', 'verified'])->get('/plenamentemagra', function () {
    return view('plenamentemagra');
})->name('plena');

