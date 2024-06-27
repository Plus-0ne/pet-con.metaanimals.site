<?php

use App\Http\Controllers\Admin\LiveController;
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

Route::get('/exhibitor', [RegistrationController::class,'exhibitorRegistrationView'])->name('exhibitor.form');
Route::get('/exhibitor/create', [RegistrationController::class,'exhibitorRegistrationNew'])->name('exhibitor.create');
// Route::get('/exhibitor/preview', [RegistrationController::class,'exhibitorRegistrationView'])->name('exhibitor.preview');

Route::get('/petfashion', [RegistrationController::class,'petFashionRegistrationView'])->name('petfashion.form');
Route::get('/petfashion/create', [RegistrationController::class,'petFashionRegistrationNew'])->name('petfashion.create');

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
    Route::get('/dashboard', [LiveController::class,'index'])->name('admins.dashboard');

    /**
     * Validate admin login
     * @param String '/validate'
     * @param Controller [LoginController::class
     * @param Function 'adminValidation']
     * @return Illuminate\Routing\Route
     */
    Route::post('/validate', [LoginController::class,'adminValidation'])->name('admins.validate');

});


