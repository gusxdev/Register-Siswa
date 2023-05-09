<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
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

// Route::get('/', function () {
//     return view('registrasi.main');
// });

Route::get('/', [RegistrasiController::class, 'main'])->name('registrasi.main');
Route::get('/daftar', [RegistrasiController::class, 'registrasi'])->name('registrasi.bikin');
Route::post('/simpan', [RegistrasiController::class, 'simpan'])->name('registrasi.simpan');

Route::middleware(['auth'])->group(function(){
    
    Route::Resource('/registrasi', RegistrasiController::class);
    Route::get('/registrasi/destroy/{id}', [RegistrasiController::class, 'delete'])->name('registrasi.delete');
    Route::get('/export-pdf', [RegistrasiController::class, 'export'])->name('export');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
