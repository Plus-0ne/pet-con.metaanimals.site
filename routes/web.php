<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\User\PetFashionController;
use App\Http\Controllers\User\ProfileController;
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

Route::get('/profile', [ProfileController::class,'index'])->name('profile');

/**
 * Route group admin
 * @param String 'admin'
 * @return Illuminate\Routing\RouteRegistrar
 */
Route::prefix('admin')->group(function () {

    /**
     * Admin login form
     * @param String '/'
     * @param Controller [LoginController::class
     * @param Function 'index']
     * @return Illuminate\Routing\Route
     */
    Route::get('/', [LoginController::class,'index'])->name('admins');

    /**
     * Validate admin login
     * @param String '/validate'
     * @param Controller [LoginController::class
     * @param Function 'adminValidation']
     * @return Illuminate\Routing\Route
     */
    Route::post('/validate', [LoginController::class,'adminValidation'])->name('admins.validate');

});


