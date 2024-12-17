<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //$permissions = DB::table('permissions')->get();
    //return $permissions;
    // $routes = \Route::getRoutes();


    // foreach ($routes as $route) {
    //     //echo '{"uri":"' . $route->uri() . '","name":"' . $route->getName() . '"},<br>';
    //     echo "Permission::create(['name' => '" . $route->getName() . "', 'privilege' => '" . $route->getName() . "']);";
    // }
    return view('welcome');
});
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
