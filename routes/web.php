<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function () {
    Route::get('/',[mainController::class,'index'])->name('agenda');
    Route::get('/tambah',[mainController::class,'tambah'])->name('agenda.tambah');
    Route::post('/simpan',[mainController::class,'simpan'])->name('agenda.simpan');
    Route::delete('/hapus{id}',[mainController::class,'hapus'])->name('agenda.hapus');
    Route::get('/edit{id}',[mainController::class,'edit'])->name('agenda.edit');
    Route::post('/update{id}',[mainController::class,'update'])->name('agenda.update');
});