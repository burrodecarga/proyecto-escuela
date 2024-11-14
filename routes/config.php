<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Config\UserController;
use App\Http\Controllers\Config\SedeController;
use App\Http\Controllers\Config\SchoolController;
use App\Http\Controllers\Config\RoomController;
use App\Http\Controllers\Config\RoleController;
use App\Http\Controllers\Config\ResourceController;
use App\Http\Controllers\Config\PermissionController;
use App\Http\Controllers\Config\GradoController;


Route::resource('roles', RoleController::class)->names('roles');
Route::resource('users', UserController::class)->names('users');
Route::resource('schools', SchoolController::class)->names('schools');
Route::resource('sedes', SedeController::class)->names('sedes');
Route::resource('rooms', RoomController::class)->names('rooms');
Route::resource('resources', ResourceController::class)->names('resources');

Route::resource('grados', GradoController::class)->names('grados');

Route::resource('permissions', PermissionController::class)->only('index')->names('permissions');


///Rutas Particulares School

Route::get('administrator/{school}', [SchoolController::class, 'administrator'])->name('schools.administrator');

Route::post('schools/assign', [SchoolController::class, 'assign'])->name('schools.assign');

Route::get('coordinator/{sede}', [SedeController::class, 'coordinator'])->name('sedes.coordinator');

Route::post('assign', [SedeController::class, 'assign'])->name('sedes.assign');