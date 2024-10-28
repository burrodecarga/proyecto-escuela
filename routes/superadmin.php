<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\RoleController;

Route::resource('roles', RoleController::class)->names('roles');

