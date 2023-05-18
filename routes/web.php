<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DreamController;
use App\Http\Controllers\ProgressController;

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

Route::get('/', [DreamController::class, 'index'])->name('dreams.index');
Route::get('/dream/{id}', [DreamController::class, 'show'])->name('dream.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/dreamStore', [DreamController::class, 'store'])->name('dream.store');
    Route::post('progressStore', [ProgressController::class, 'store'])->name('progress.store');
    Route::delete('/deleteDream/{id}', [DreamController::class, 'destroy'])->name('dream.destroy');
    Route::get('/mydreams', [DreamController::class, 'mydreams'])->name('mydreams');
});

require __DIR__.'/auth.php';
