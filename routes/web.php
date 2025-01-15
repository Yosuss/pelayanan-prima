<?php

use App\Http\Controllers\inputController;
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
});

Route::prefix('/input')->group(function () {
    Route::get('/',[inputController::class,'input'])->name('input');    
    Route::post('/simpan',[inputController::class,'simpan'])->name('input.simpan');
    // Route::delete('/hapus{id}',[inputController::class,'hapus'])->name('input.hapus');
    // Route::get('/edit{id}',[inputController::class,'edit'])->name('input.edit');
    // Route::post('/update{id}',[inputController::class,'update'])->name('input.update');
});