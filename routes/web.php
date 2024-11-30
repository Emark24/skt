<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConferenceController;

// Pagrindinis puslapis
Route::get('/', function () {
    return view('home');
})->name('home');

// Kliento posistemis
Route::get('/conferences', [ClientController::class, 'index'])->name('conferences.index');
Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('conferences.show');
Route::get('/register/{id}', [ClientController::class, 'register'])->name('client.register');

// Darbuotojo posistemis
Route::get('/employee/conferences', [EmployeeController::class, 'index'])->name('employee.conferences.index');
Route::get('/employee/conferences/{id}', [EmployeeController::class, 'show'])->name('employee.conferences.show');

// Administratoriaus posistemis
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

// Naudotojų valdymas
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');

// Konferencijų valdymas
Route::get('/admin/conferences', [ConferenceController::class, 'index'])->name('admin.conferences.index');
Route::get('/admin/conferences/create', [ConferenceController::class, 'create'])->name('admin.conferences.create');
Route::post('/admin/conferences', [ConferenceController::class, 'store'])->name('admin.conferences.store');
Route::get('/admin/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('admin.conferences.edit');
Route::put('/admin/conferences/{id}', [ConferenceController::class, 'update'])->name('admin.conferences.update');
Route::delete('/admin/conferences/{id}', [ConferenceController::class, 'destroy'])->name('admin.conferences.destroy');