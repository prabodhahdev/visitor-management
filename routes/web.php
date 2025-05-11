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

Route::get('department', [App\Http\Controllers\DepartmentController  ::class, 'Index'])->name('department');
Route::get('department/fetchall', [App\Http\Controllers\DepartmentController  ::class, 'fetch_all'])->name('department.fetchall');
Route::get('department/add', [App\Http\Controllers\DepartmentController  ::class, 'add'])->name('department.add');
Route::post('department/add-validation', [App\Http\Controllers\DepartmentController  ::class, 'add_validation'])->name('department.add_validation');
Route::get('department/edit/{id}', [App\Http\Controllers\DepartmentController  ::class, 'edit'])->name('edit');
Route::get('department/delete/{id}', [App\Http\Controllers\DepartmentController  ::class, 'delete'])->name('delete');
Route::post('department/edit-validation', [App\Http\Controllers\DepartmentController::class, 'edit_validation'])->name('department.edit_validation');
