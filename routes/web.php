<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    Route::get('/mahasiswa',[mahasiswaController::class, 'index'])->middleware('auth');
    Route::get('/mahasiswa/create', [mahasiswaController::class, 'create'])->middleware('is_admin');
    Route::get('/mahasiswa/{nim}', [mahasiswaController::class, 'show'])->middleware('is_admin'); 
    Route::post('/mahasiswa', [mahasiswaController::class, 'store'])->middleware('is_admin'); 
    Route::get('/mahasiswa/{nim}/edit', [mahasiswaController::class, 'edit'])->middleware('is_admin');
    Route::put('/mahasiswa/{nim}', [mahasiswaController::class, 'update'])->middleware('is_admin'); 
    Route::delete('/mahasiswa/{nim}', [mahasiswaController::class, 'destroy'])->middleware('is_admin');

//Route::resource('mahasiswa',mahasiswaController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');