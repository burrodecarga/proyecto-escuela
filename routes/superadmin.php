<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\UserController;
use App\Http\Controllers\Superadmin\SedeController;
use App\Http\Controllers\Superadmin\SchoolController;
use App\Http\Controllers\Superadmin\RoomController;
use App\Http\Controllers\Superadmin\RoleController;
use App\Http\Controllers\Superadmin\ResourceController;
use App\Http\Controllers\Superadmin\PermissionController;
use App\Http\Controllers\Superadmin\GradoController;


Route::resource('roles', RoleController::class)->names('roles');
Route::resource('users', UserController::class)->names('users');
Route::resource('schools', SchoolController::class)->names('schools');
Route::resource('sedes', SedeController::class)->names('sedes');
Route::resource('rooms', RoomController::class)->names('rooms');
Route::resource('resources', ResourceController::class)->names('resources');

Route::resource('grados', GradoController::class)->names('grados');

Route::resource('permissions', PermissionController::class)->only('index')->names('permissions');

