<?php

use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/competence', function () {
    return view('competence');
});

Route::get('/main', [MainController::class, 'index'])->name('main');

// Route::get('/competence', [CompetenceController::class, 'index'])->name('competence');


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
