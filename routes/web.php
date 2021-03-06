<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PofController;



Route::get('/', [PofController::class,'index'])->name('pofs.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 