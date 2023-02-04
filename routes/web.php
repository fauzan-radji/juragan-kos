<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kamar', [App\Http\Controllers\KamarController::class, 'index'])->name('kamar');
Route::post('/kamar', [App\Http\Controllers\KamarController::class, 'store'])->name('kamar.store');
Route::get('/kamar/create', [App\Http\Controllers\KamarController::class, 'create'])->name('kamar.create');
Route::get('/kamar/edit/{id}', [App\Http\Controllers\KamarController::class, 'edit'])->name('kamar.edit');
