<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\AdministratorController;


Route::resource('administrator', AdministratorController::class)->names('administrator')->only('index');
Route::get('asignar', [AdministratorController::class, 'asignar'])->name('administrator.asignar');

