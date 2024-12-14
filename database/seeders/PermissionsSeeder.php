<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {


        Permission::create(['name' => 'roles.index', 'privilege' => 'role list']);
        Permission::create(['name' => 'roles.create', 'privilege' => 'role create']);
        Permission::create(['name' => 'roles.store', 'privilege' => 'role create']);
        Permission::create(['name' => 'roles.edit', 'privilege' => 'role edit']);
        Permission::create(['name' => 'roles.update', 'privilege' => 'role edit']);
        Permission::create(['name' => 'roles.destroy', 'privilege' => 'role delete']);
        Permission::create(['name' => 'roles.show', 'privilege' => 'role view']);

        Permission::create(['name' => 'permissions.index', 'privilege' => 'permission list']);
        Permission::create(['name' => 'permissions.create', 'privilege' => 'permission create']);
        Permission::create(['name' => 'permissions.store', 'privilege' => 'permission create']);
        Permission::create(['name' => 'permissions.edit', 'privilege' => 'permission edit']);
        Permission::create(['name' => 'permissions.update', 'privilege' => 'permission edit']);
        Permission::create(['name' => 'permissions.destroy', 'privilege' => 'permission delete']);
        Permission::create(['name' => 'permissions.show', 'privilege' => 'permission view']);

        // Permission::create(['name' => 'coordinators.index', 'privilege' => 'coordinator list']);
        // Permission::create(['name' => 'coordinators.create', 'privilege' => 'coordinator create']);
        // Permission::create(['name' => 'coordinators.store', 'privilege' => 'coordinator create']);
        // Permission::create(['name' => 'coordinators.edit', 'privilege' => 'coordinator edit']);
        // Permission::create(['name' => 'coordinators.update', 'privilege' => 'coordinator edit']);
        // Permission::create(['name' => 'coordinators.destroy', 'privilege' => 'coordinator delete']);
        // Permission::create(['name' => 'coordinators.show', 'privilege' => 'coordinator view']);

        ///Permisos de usuer

        Permission::create(['name' => 'users.index', 'privilege' => 'user list']);
        Permission::create(['name' => 'users.create', 'privilege' => 'user create']);
        Permission::create(['name' => 'users.store', 'privilege' => 'user create']);
        Permission::create(['name' => 'users.edit', 'privilege' => 'user edit']);
        Permission::create(['name' => 'users.update', 'privilege' => 'user edit']);
        Permission::create(['name' => 'users.destroy', 'privilege' => 'user delete']);
        Permission::create(['name' => 'users.show', 'privilege' => 'user view']);

        ///Permisos de school

        Permission::create(['name' => 'schools.index', 'privilege' => 'school list']);
        Permission::create(['name' => 'schools.create', 'privilege' => 'school create']);
        Permission::create(['name' => 'schools.store', 'privilege' => 'school create']);
        Permission::create(['name' => 'schools.edit', 'privilege' => 'school edit']);
        Permission::create(['name' => 'schools.update', 'privilege' => 'school edit']);
        Permission::create(['name' => 'schools.destroy', 'privilege' => 'school delete']);
        Permission::create(['name' => 'schools.show', 'privilege' => 'school view']);


        ///Permisos de sedes

        Permission::create(['name' => 'sedes.index', 'privilege' => 'sede list']);
        Permission::create(['name' => 'sedes.create', 'privilege' => 'sede create']);
        Permission::create(['name' => 'sedes.store', 'privilege' => 'sede create']);
        Permission::create(['name' => 'sedes.edit', 'privilege' => 'sede edit']);
        Permission::create(['name' => 'sedes.update', 'privilege' => 'sede edit']);
        Permission::create(['name' => 'sedes.destroy', 'privilege' => 'sede delete']);
        Permission::create(['name' => 'sedes.show', 'privilege' => 'sede view']);

        Permission::create(['name' => 'resources.index', 'privilege' => 'resource list']);
        Permission::create(['name' => 'resources.create', 'privilege' => 'resource create']);
        Permission::create(['name' => 'resources.store', 'privilege' => 'resource create']);
        Permission::create(['name' => 'resources.edit', 'privilege' => 'resource edit']);
        Permission::create(['name' => 'resources.update', 'privilege' => 'resource edit']);
        Permission::create(['name' => 'resources.destroy', 'privilege' => 'resource delete']);
        Permission::create(['name' => 'resources.show', 'privilege' => 'resource view']);



        ///Permisos de usuer

        Permission::create(['name' => 'grados.index', 'privilege' => 'grado list']);
        Permission::create(['name' => 'grados.create', 'privilege' => 'grado create']);
        Permission::create(['name' => 'grados.store', 'privilege' => 'grado create']);
        Permission::create(['name' => 'grados.edit', 'privilege' => 'grado edit']);
        Permission::create(['name' => 'grados.update', 'privilege' => 'grado edit']);
        Permission::create(['name' => 'grados.destroy', 'privilege' => 'grado delete']);
        Permission::create(['name' => 'grados.show', 'privilege' => 'grado view']);

        Permission::create(['name' => 'courses.index', 'privilege' => 'course list']);
        Permission::create(['name' => 'courses.create', 'privilege' => 'course create']);
        Permission::create(['name' => 'courses.store', 'privilege' => 'course create']);
        Permission::create(['name' => 'courses.edit', 'privilege' => 'course edit']);
        Permission::create(['name' => 'courses.update', 'privilege' => 'course edit']);
        Permission::create(['name' => 'courses.destroy', 'privilege' => 'course delete']);
        Permission::create(['name' => 'courses.show', 'privilege' => 'course view']);


        Permission::create(['name' => 'books.index', 'privilege' => 'book list']);
        Permission::create(['name' => 'books.create', 'privilege' => 'book create']);
        Permission::create(['name' => 'books.store', 'privilege' => 'book create']);
        Permission::create(['name' => 'books.edit', 'privilege' => 'book edit']);
        Permission::create(['name' => 'books.update', 'privilege' => 'book edit']);
        Permission::create(['name' => 'books.destroy', 'privilege' => 'book delete']);
        Permission::create(['name' => 'books.show', 'privilege' => 'book view']);

        Permission::create(['name' => 'teachers.index', 'privilege' => 'teacher list']);
        Permission::create(['name' => 'teachers.create', 'privilege' => 'teacher create']);
        Permission::create(['name' => 'teachers.store', 'privilege' => 'teacher create']);
        Permission::create(['name' => 'teachers.edit', 'privilege' => 'teacher edit']);
        Permission::create(['name' => 'teachers.update', 'privilege' => 'teacher edit']);
        Permission::create(['name' => 'teachers.destroy', 'privilege' => 'teacher delete']);
        Permission::create(['name' => 'teachers.show', 'privilege' => 'teacher view']);


        Permission::create(['name' => 'padres.index', 'privilege' => 'padre list']);
        Permission::create(['name' => 'padres.create', 'privilege' => 'padre create']);
        Permission::create(['name' => 'padres.store', 'privilege' => 'padre create']);
        Permission::create(['name' => 'padres.edit', 'privilege' => 'padre edit']);
        Permission::create(['name' => 'padres.update', 'privilege' => 'padre edit']);
        Permission::create(['name' => 'padres.destroy', 'privilege' => 'padre delete']);
        Permission::create(['name' => 'padres.show', 'privilege' => 'padre view']);

        Permission::create(['name' => 'padre.asignar', 'privilege' => 'padre asignar']);
        Permission::create(['name' => 'padres', 'privilege' => 'padre inscribir']);






        $super_admin_permissions = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27];
        //$super_admin_permissions=[];
        $coordinator_permissions = [8, 9, 10, 11, 12, 13, 14, 57, 58, 58, 60, 61, 62, 63];
        $teacher_permissions = [64, 65, 66, 67, 68, 69, 70];
        $admin_permissions = [2, 44, 45, 46, 47, 48, 49, 50];
        $parent_permissions = [];
        $superAdmin = Role::findByName('super-admin');
        $coordinator = Role::findByName('coordinator');
        $admin = Role::findByName('administrator');
        $parent = Role::findByName('parent');
        $teacher = Role::findByName('teacher');
        $superAdmin->givePermissionTo($super_admin_permissions);
        $coordinator->givePermissionTo($coordinator_permissions);
        $admin->givePermissionTo($admin_permissions);
        $teacher->givePermissionTo($teacher_permissions);
        $parent->givePermissionTo($parent_permissions);

    }
}
