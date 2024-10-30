<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchController;

Route::get('/purchs', [PurchController::class, 'index']);
Route::post('/purchs', [PurchController::class, 'show'])->name('purchs.show');
Route::patch('/purchs', [AccemtsController::class, 'change'])->name('purchs.change');