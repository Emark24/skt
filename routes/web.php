<?php

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('home');

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\UserController;

// Kliento posistemis
Route::prefix('client')->group(function () {
    Route::get('/conferences', [ClientController::class, 'list'])->name('client.conferences');
    Route::get('/conference/{id}', [ClientController::class, 'show'])->name('client.conference.show');
    Route::post('/conference/{id}/register', [ClientController::class, 'register'])->name('client.conference.register');
});

// Darbuotojo posistemis
Route::prefix('employee')->group(function () {
    Route::get('/conferences', [EmployeeController::class, 'list'])->name('employee.conferences');
    Route::get('/conference/{id}', [EmployeeController::class, 'show'])->name('employee.conference.show');
});

// Administratoriaus posistemis
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('conferences', ConferenceController::class);
});
