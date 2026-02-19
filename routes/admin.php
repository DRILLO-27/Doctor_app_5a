<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\DoctorController;

// Dashboard
Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

// Gestión de Roles
Route::resource('roles', RoleController::class);

// Gestión de Usuarios
Route::resource('users', UserController::class);

// Gestión de pacientes
Route::resource('patients', PatientController::class);

// 🔥 DOCTORES (SIN ->names y SIN prefix)
Route::resource('doctors', DoctorController::class);