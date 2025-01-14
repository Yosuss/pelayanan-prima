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
    Route::get('/',[mainController::class,'landing'])->name('pelayanan');
    Route::get('/display',[mainController::class,'display'])->name('display');
    
    // Route::get('/tambah',[mainController::class,'tambah'])->name('pelayanan.tambah');
    // Route::post('/simpan',[mainController::class,'simpan'])->name('pelayanan.simpan');
    // Route::delete('/hapus{id}',[mainController::class,'hapus'])->name('pelayanan.hapus');
    // Route::get('/edit{id}',[mainController::class,'edit'])->name('pelayanan.edit');
    // Route::post('/update{id}',[mainController::class,'update'])->name('pelayanan.update');
});