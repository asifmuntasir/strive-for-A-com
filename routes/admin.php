<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;

use App\Http\Controllers\Admin\{
    DashboardController,
    AdminController,
    ProfileController,
    TeacherController,
    UserController,
    CategoryController,

    SettingController,



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


Route::resource('teacher', TeacherController::class);
Route::resource('user', UserController::class);
Route::resource('category', CategoryController::class);




Route::group(['prefix' => '', 'as' => 'setting.', 'controller' => SettingController::class], function () {
    Route::get('setting', 'setting')->name('setting');
    Route::put('setting', 'settingUpdate');
    Route::get('logo-icon', 'logoIcon')->name('logo.icon');
    Route::put('logo-icon', 'logoIconUpdate');
});
Route::singleton('profile', ProfileController::class);

Route::get('password',[ProfileController::class,'index'])->name('profile.index');
Route::singleton('password', ChangePasswordController::class);


Route::group(['prefix' => '', 'as' => 'setting.', 'controller' => SettingController::class], function () {
    Route::get('setting', 'setting')->name('setting');
    Route::put('setting', 'settingUpdate');
    Route::get('logo-icon', 'logoIcon')->name('logo.icon');
    Route::put('logo-icon', 'logoIconUpdate');
});


