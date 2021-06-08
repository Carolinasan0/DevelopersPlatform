<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\CategoryController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('vacante/{vacancy:id}', [VacancyController::class, 'vacancy'])->name('vacancy');
// Route::get('vacante/crear', [VacancyController::class, 'create'])->name('vacancy');

Route::get('categorias', [CategoryController::class, 'category'])->name('category');
// Route::get('categorias/crear', [CategoryController::class, 'create'])->name('category');

Route::get('category/{category}', [VacancyController::class, 'category'])->name('vacancy.category');


//RUTAS VERIFICACIÓN CORREO
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', '¡Link de verficación enviado!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//FIN RUTAS VERIFICACIÓN CORREO

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('index');
})->name('home');
