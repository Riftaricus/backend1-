<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('/', IndexController::class);

Route::resource('/menu', MenuController::class);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/reservations', function () {
    return view('reservations');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/menu/create', [MenuController::class, 'create'])->name('create');
    Route::post('/menu/', [MenuController::class, 'store'])->name('store');
    Route::get('/menu/edit', [MenuController::class, 'edit'])->name('edit');
    Route::put('/menu/update', [MenuController::class, 'update'])->name('update');
    Route::patch('/menu/destroy', [MenuController::class, 'destroy'])->name('destroy');
});

require __DIR__ . '/auth.php';
