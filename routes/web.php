<?php

use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

Route::get('/tikets', [TiketController::class, 'index'])->name('tikets.index');
Route::get('/tikets/create', [TiketController::class, 'create'])->name('tikets.create');
Route::post('/tikets', [TiketController::class, 'store'])->name('tikets.store');
Route::get('/tikets/{tiket}', [TiketController::class, 'show'])->name('tikets.show');
Route::get('/tikets/{tiket}/edit', [TiketController::class, 'edit'])->name('tikets.edit');
Route::put('/tikets/{tiket}', [TiketController::class, 'update'])->name('tikets.update');
Route::delete('/tikets/{tiket}', [TiketController::class, 'destroy'])->name('tikets.destroy');