<?php

namespace App\Http\Controllers\Config;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class RoleController extends Controller
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
        $roles = Role::all();
        return view('superadmin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $permissions = Permission::orderBy('name', 'asc')->get();
        $role = new Role();
        $title = __("role create");
        $btn = __("create");
        $permissions_id = [];
        return view('superadmin.roles.create', compact('permissions', 'role', 'btn', 'permissions_id', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        $name = $request->input('name');
        $permissions = $request->only('permissions');
        $role = Role::create(['name' => $name, 'guard_name' => 'web']);
        if (count($permissions) > 0) {
            $role->syncPermissions($permissions);
        }
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role): View
    {
        $permissions = Permission::orderBy('name', 'asc')->get();
        $title = __("role show");
        $btn = "show";
        $permissions_id = $role->permissions->pluck('id')->toArray();
        return view('superadmin.roles.show', compact('permissions', 'role', 'btn', 'permissions_id', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::orderBy('name', 'asc')->get();
        $title = __("role edit");
        $btn = __("update");
        $permissions_id = $role->permissions->pluck('id')->toArray();
        return view('superadmin.roles.edit', compact('permissions', 'role', 'btn', 'permissions_id', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
        ]);
        $data = $request->only('name');

        $permissions = $request->only('permissions');
        if ($role->id > MINIMO_ROLE_ORIGINAL) {
            $role->update($data);
        }
        if ($role->id > 1) {
            if (count($permissions) > 0) {
                $role->syncPermissions($permissions);
            }
        }
        return redirect()->route('roles.index')->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $user = auth()->user();
        $roleName = $user->roles->pluck("name")->first();
        if ($role->id <= MINIMO_ROLE_ORIGINAL) {
            return redirect()->route('roles.index')->with('danger', 'Operación no permitida');
        }
        if ($roleName <> 'super-admin') {
            abort(403);
        } {
            $role->delete();
            //dd($roleName);
            return redirect()->route('roles.index')->with('success', 'Role Eliminado correctamente');
        }
    }
}
