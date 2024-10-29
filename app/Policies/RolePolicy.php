<?php

namespace App\Policies;

use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Role $role): bool
    {

        return $role->id > MINIMO_ROLE_ORIGINAL;

    }


    public function canDeleteRole(User $user, Role $role): bool
    {
        return $role->id > MINIMO_ROLE_ORIGINAL;
        //$role = $user->roles()->first();
        //     $permissions = $role->permissions->pluck('name')->toArray();
        //     return in_array($ability . '.index', $permissions) || in_array($ability . '.index', $permissions
        //return $user->hasRole('roles.destroy', 'roles.update', 'roles.edit') && $role->id > 11;
    }
}
