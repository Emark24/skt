<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Pagrindinis puslapis
Route::get('/', [MainController::class, 'index'])->name('home');

// Atsijungimas
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


    // Kliento posistemis
    Route::prefix('client')->name('client.')->group(function () {
        Route::get('/conferences', [ClientController::class, 'index'])->name('conferences');
        Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('conferences.show');
        Route::get('/conferences/{id}/register', [ClientController::class, 'register'])->name('register');
    });

    // Darbuotojo posistemis
    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('/conferences', [EmployeeController::class, 'index'])->name('conferences.index');
        Route::get('/conferences/{id}', [EmployeeController::class, 'show'])->name('conferences.show');
    });

    // Administratoriaus posistemis
Route::prefix('admin')->name('admin.')->group(function () {
    // Pagrindinis admino puslapis
    Route::get('/', [ConferenceController::class, 'adminIndex'])->name('index'); // Konferencijų sąrašas

    // Naudotojų valdymas
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Konferencijų valdymas
    Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
    Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
    Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
    Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
    Route::put('/conferences/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
    Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
});

