<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TecnologyController;
use App\Http\Controllers\Admin\VacanciesController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('tecnologies', TecnologyController::class)->names('admin.tecnologies');

Route::resource('vacancies', VacanciesController::class)->names('admin.vacancies');
