<?php

namespace App\Http\Controllers\Config;

use App\Http\Requests\UpdateUserRequest;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(): View
    {
        return view('config.users.index');
    }

    public function edit(User $user)
    {
        $computer_user = auth()->user();
        $computer_user_role_name = $computer_user->roles->pluck("name")->first();
        $computer_user_role_id = $computer_user->roles->pluck("id")->first();
        $role = $user->roles->first();
        if ($role->id < EDIT_ROLE_ORIGINAL) {
            return redirect()->route('users.index')->with('warning', 'Operación no permitida');
        }
        if ($computer_user_role_name <> 'super-admin') {

            abort(403);
        }
        $userRoleId = $user->roles->pluck("id")->first();
        //dd($userRoleId);
        $roles = Role::where('id', '>=', EDIT_ROLE_ORIGINAL)->get();
        $title = __("user edit");
        $btn = __("edit");
        return view('config.users.edit', compact('user', 'title', 'btn', 'roles', 'userRoleId'));
    }

    public function update(UpdateUserRequest $request, user $user)
    {
        $role = $request->input('role');
        $user->roles()->sync($role);
        $rol = Role::find($role);
        $user->rol = $rol->name;
        $user->save();
        return redirect()->route('users.index')->with('success', 'Registro actualizado correctamente');
        ;
    }

    public function getPermissionOfRole($id)
    {
        $permissions = array();
        $data = collect(DB::table('role_has_permissions')->where('role_id', $id)->get());
        $permissions_id = $data->map(function ($data) {
            return $data->permission_id;
        });
        return $permissions_id->toArray();
    }

    public function revokeRoleOfUser($id)
    {
        DB::table('model_has_roles')->where('model_id', $id)->delete();
    }

    public function profile(User $user)
    {
        $btn = "modify";
        $title = "user";
        return view('users.profile', compact('user', 'title', 'btn'));
    }


    public function updateUser(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $data = $request->only('name', 'email', 'address', 'phone', 'movil', 'avatar', 'plus', 'card_id', 'password');
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'movil' => $request->movil,
            'card_id' => $request->card_id,
            'plus' => $request->plus,
        ]);
        if ($request->input('password')) {
            $secret = \bcrypt($request->input('password'));
            $user->fill(['password' => $secret])->save();
        }
        $filename = $user->avatar;
        //dd($filename);
        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $extension = $request->file('avatar')->extension();
            $avatar = 'user' . time() . '.' . $extension;
            if ($filename <> 'avatar.jpg' && $filename <> null) {
                $avatar_path = "app/avatars/" . $filename;
                if (File::exists($avatar_path)) {
                    unlink($avatar_path);
                }
            }
            $filename = $avatar;
            Storage::disk('avatars')->put($avatar, File::get($file));
        }

        $user->update(['avatar' => $filename]);
        $user->save();
        return redirect()->route('home')->with('success', 'user ' . $user->name . ' actualizado exitosamente');
    }

    public function create()
    {
        return view('config.users.create');
    }

}
