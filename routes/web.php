<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/tarifs', 'tarifs')->name('tarifs');
Route::view('/services', 'services')->name('services');
Route::view('/nocturnes', 'nocturnes')->name('nocturnes');
Route::view('/emploi', 'emploi')->name('emploi');
Route::view('/contact', 'contact')->name('contact');
Route::view('/reservation', 'reservation')->name('reservation');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

require __DIR__.'/auth.php';
