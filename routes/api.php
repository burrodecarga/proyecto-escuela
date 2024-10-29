<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/users', function (Request $request) {
    return datatables()->of(User::with('roles'))
        ->addColumn('btn', 'superadmin.users.actions')
        ->rawColumns(['btn'])
        ->toJson();
});

Route::get('/manager', function (Request $request) {
    return datatables()->of(User::with('roles'))
        //    ->addColumn('btn', 'admin.sedes.actions')
        //    ->rawColumns(['btn'])
        ->toJson();
});
