<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\Teacher\{
    DashboardController,
    ProfileController,
    UserController,

    PostController,
    CategoryController,
    RegisterController,
    ChangePasswordController,

};
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::singleton('profile', ProfileController::class);
Route::resource('post', PostController::class);

Route::resource('user', UserController::class);



Route::singleton('password', ChangePasswordController::class);
