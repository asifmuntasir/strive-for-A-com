<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Student\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;



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

Route::get('/',[HomeController::class,'home'])->name('home.page');

Route::middleware('auth')->group(function () {
    // Route::get('/account/password', [PasswordController::class, 'index'])->name('password.index');
    Route::put('/account/password', [PasswordController::class, 'update'])->name('password.update');

    Route::get('/account/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/account/notice/show/{id}',[DashboardController::class,'notice_show'])->name('notice.show');
    Route::get('/account/dashboard/download/{file}',[DashboardController::class,'file_download'])
    ->name('file.download');

    Route::singleton('account/profile', ProfileController::class);


    Route::get('/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::patch('admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('singup/',[HomeController::class,'singup'])->name('singup.page');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::post('register', [HomeController::class, 'student_reg'])->name('student_reg');
require __DIR__.'/auth.php';

Route::get('/teacher-register',[RegisterController::class,'index'])->name('teacher.register');
Route::post('/teacher-register',[RegisterController::class,'store'])->name('teacher.store');


