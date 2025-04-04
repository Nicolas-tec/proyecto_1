<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GtareaController;

Route::get('/', [GtareaController::class,"index"])->name("gtarea");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('tareas', GtareaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
