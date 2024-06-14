<?php

use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\User\RegistrationController;
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



Route::get('/', [LandingController::class,'index'])->name('landing');
Route::get('/register', [RegistrationController::class,'index'])->name('register.form');
Route::post('/register/create', [RegistrationController::class,'registerNew'])->name('register.create');
