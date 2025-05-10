<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register', [App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'custom_registration'])->name('register.custom');

Route::get('login', [App\Http\Controllers\CustomAuthController::class, 'Index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'custom_login'])->name('login.custom');

Route::get('dashboard', [App\Http\Controllers\CustomAuthController::class, 'dashboard'])->name('dashboard');

Route::get('logout', [App\Http\Controllers\CustomAuthController::class, 'logout'])->name('logout');


Route::get('profile', [App\Http\Controllers\ProfileController::class, 'Index'])->name('profile');

Route::post('edit-validation', [App\Http\Controllers\ProfileController::class, 'edit_validation'])->name('profile.edit');

Route::get('receptionist', [App\Http\Controllers\ReceptionistController  ::class, 'Index'])->name('receptionist');
Route::get('receptionist/fetchall', [App\Http\Controllers\ReceptionistController  ::class, 'fetch_all'])->name('receptionist.fetchall');

Route::get('receptionist/add', [App\Http\Controllers\ReceptionistController  ::class, 'add'])->name('receptionist.add');

Route::post('receptionist/add-validation', [App\Http\Controllers\ReceptionistController  ::class, 'add_validation'])->name('receptionist.add_validation');

Route::get('receptionist/delete/{id}', [App\Http\Controllers\ReceptionistController  ::class, 'delete'])->name('delete');

Route::get('receptionist/edit/{id}', [App\Http\Controllers\ReceptionistController  ::class, 'edit'])->name('edit');

Route::post('receptionist/edit-validation', [App\Http\Controllers\ReceptionistController::class, 'edit_validation'])->name('receptionist.edit_validation');

