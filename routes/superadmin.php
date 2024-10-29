<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\UserController;
use App\Http\Controllers\Superadmin\SchoolController;
use App\Http\Controllers\Superadmin\RoleController;
use App\Http\Controllers\Superadmin\PermissionController;

Route::resource('roles', RoleController::class)->names('roles');
Route::resource('users', UserController::class)->names('users');
Route::resource('schools', SchoolController::class)->names('schools');
Route::resource('permissions', PermissionController::class)->only('index')->names('permissions');

