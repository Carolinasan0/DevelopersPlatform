<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('vacante/{vacancy:id}', [VacancyController::class, 'vacancy'])->name('vacancy');
// Route::get('vacante/crear', [VacancyController::class, 'create'])->name('vacancy');

Route::get('categorias', [CategoryController::class, 'category'])->name('category');
// Route::get('categorias/crear', [CategoryController::class, 'create'])->name('category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
