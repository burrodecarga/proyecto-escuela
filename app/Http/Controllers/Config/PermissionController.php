<?php

namespace App\Http\Controllers\Config;

use Spatie\Permission\Models\Permission;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('can:roles.index', only: ['index']),
            new Middleware('can:roles.create', only: ['create']),
            new Middleware('can:roles.store', only: ['store']),
            new Middleware('can:roles.show', only: ['show']),
            new Middleware('can:roles.update', only: ['update']),
            new Middleware('can:roles.edit', only: ['edit']),
            new Middleware('can:roles.destroy', only: ['destroy']),
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('config.permissions.index', compact('permissions'));
    }
}
