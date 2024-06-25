<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Backend routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('backend.dashboard');
});


require __DIR__.'/auth.php';
