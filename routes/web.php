<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
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
})->name('welcome');

Route::get('/dashboard', [ReservationController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/reservation/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');
    Route::get('/reservation/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::put('/reservation/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::delete('/reservation/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.delete');
});


require __DIR__.'/auth.php';
