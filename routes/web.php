<?php

use App\Http\Controllers\BeheerController;
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



// Routes for Beheer
Route::resource('beheers', BeheerController::class);
Route::get('/beheers', [BeheerController::class, 'index'])->name('beheers.index');
Route::get('/beheers/create', [BeheerController::class, 'create'])->name('beheers.create');
Route::post('/beheers', [BeheerController::class, 'store'])->name('beheers.store');
Route::get('/beheers/{Beheer}', [BeheerController::class, 'show'])->name('beheers.show');
Route::get('/beheers/{Beheer}/edit', [BeheerController::class, 'edit'])->name('beheers.edit');
Route::put('/beheers/{Beheer}', [BeheerController::class, 'update'])->name('beheers.update');
Route::delete('/beheers/{Beheer}', [BeheerController::class, 'destroy'])->name('beheers.destroy');


require __DIR__.'/auth.php';
