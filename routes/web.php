<?php

use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', [MainController::class, 'index'])->name('main');
Route::post('/main', [MainController::class, 'mail'])->name('mail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/competence', [CompetenceController::class, 'index'])->name('competence.index');
Route::patch('/competence', [CompetenceController::class, 'update'])->name('competence.update');

require __DIR__.'/auth.php';
