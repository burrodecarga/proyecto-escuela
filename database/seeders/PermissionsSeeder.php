<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $json = File::get('database/data/list_order.json');
        $data = json_decode($json);
        // foreach ($data as $obj) {
        //     $ppermission = new Permission();

        //     $ppermission->name = Str::slug($obj->name);
        //     $ppermission->privilege = Str::slug($obj->name);

        //     $ppermission->save();
        // }

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

         Permission::create(['name' => 'users.index', 'privilege' => 'user list']);
         Permission::create(['name' => 'users.create', 'privilege' => 'user create']);
         Permission::create(['name' => 'users.store', 'privilege' => 'user create']);
         Permission::create(['name' => 'users.edit', 'privilege' => 'user edit']);
         Permission::create(['name' => 'users.update', 'privilege' => 'user edit']);
         Permission::create(['name' => 'users.destroy', 'privilege' => 'user delete']);
         Permission::create(['name' => 'users.show', 'privilege' => 'user view']);


         Permission::create(['name' => 'schools.index', 'privilege' => 'school list']);
         Permission::create(['name' => 'schools.create', 'privilege' => 'school create']);
         Permission::create(['name' => 'schools.store', 'privilege' => 'school create']);
         Permission::create(['name' => 'schools.edit', 'privilege' => 'school edit']);
         Permission::create(['name' => 'schools.update', 'privilege' => 'school edit']);
         Permission::create(['name' => 'schools.destroy', 'privilege' => 'school delete']);
         Permission::create(['name' => 'schools.show', 'privilege' => 'school view']);



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

        // Permission::create(['name' => 'roles.index', 'privilege' => 'role list']);
        // Permission::create([
        //     'name' => 'roles.create',
        //     'privilege' =>
        //         'roles.create'
        // ]);
        // Permission::create(['name' => 'roles.store', 'privilege' => 'roles.store']);
        // Permission::create([
        //     'name'
        //     => 'roles.show',
        //     'privilege' => 'roles.show'
        // ]);
        // Permission::create([
        //     'name' => 'roles.edit',
        //     'privilege' =>
        //         'roles.edit'
        // ]);
        // Permission::create(['name' => 'roles.update', 'privilege' => 'roles.update']);
        // Permission::create([
        //     'name'
        //     => 'roles.destroy',
        //     'privilege' => 'roles.destroy'
        // ]);

        // Permission::create(['name' => 'permissions.index', 'privilege' => 'permission list']);
        // Permission::create(['name' => 'permissions.create', 'privilege' => 'permission create']);

        // Permission::create(['name' => 'permissions.store', 'privilege' => 'permission create']);

        // Permission::create(['name' => 'permissions.edit', 'privilege' => 'permission edit']);
        // Permission::create(['name' => 'permissions.update', 'privilege' => 'permission edit']);

        // Permission::create(['name' => 'permissions.destroy', 'privilege' => 'permission delete']);

        // Permission::create(['name' => 'permissions.show', 'privilege' => 'permission view']);


        // Permission::create([
        //     'name' => 'users.index',
        //     'privilege' =>
        //         'users.index'
        // ]);
        // Permission::create(['name' => 'users.create', 'privilege' => 'users.create']);
        // Permission::create([
        //     'name'
        //     => 'users.store',
        //     'privilege' => 'users.store'
        // ]);
        // Permission::create([
        //     'name' => 'users.show',
        //     'privilege' =>
        //         'users.show'
        // ]);
        // Permission::create(['name' => 'users.edit', 'privilege' => 'users.edit']);
        // Permission::create([
        //     'name' =>
        //         'users.update',
        //     'privilege' => 'users.update'
        // ]);
        // Permission::create([
        //     'name' => 'users.destroy',
        //     'privilege' =>
        //         'users.destroy'
        // ]);
        // Permission::create([
        //     'name' => 'schools.index',
        //     'privilege' =>
        //         'schools.index'
        // ]);
        // Permission::create([
        //     'name' => 'schools.create',
        //     'privilege' =>
        //         'schools.create'
        // ]);
        // Permission::create([
        //     'name' => 'schools.store',
        //     'privilege' =>
        //         'schools.store'
        // ]);
        // Permission::create([
        //     'name' => 'schools.show',
        //     'privilege' =>
        //         'schools.show'
        // ]);
        // Permission::create([
        //     'name' => 'schools.edit',
        //     'privilege' =>
        //         'schools.edit'
        // ]);
        // Permission::create([
        //     'name' => 'schools.update',
        //     'privilege' =>
        //         'schools.update'
        // ]);
        // Permission::create([
        //     'name' => 'schools.destroy',
        //     'privilege' =>
        //         'schools.destroy'
        // ]);
        // Permission::create([
        //     'name' => 'sedes.index',
        //     'privilege' =>
        //         'sedes.index'
        // ]);
        // Permission::create(['name' => 'sedes.create', 'privilege' => 'sedes.create']);
        // Permission::create([
        //     'name'
        //     => 'sedes.store',
        //     'privilege' => 'sedes.store'
        // ]);
        // Permission::create([
        //     'name' => 'sedes.show',
        //     'privilege' =>
        //         'sedes.show'
        // ]);
        // Permission::create(['name' => 'sedes.edit', 'privilege' => 'sedes.edit']);
        // Permission::create([
        //     'name' =>
        //         'sedes.update',
        //     'privilege' => 'sedes.update'
        // ]);
        // Permission::create([
        //     'name' => 'sedes.destroy',
        //     'privilege' =>
        //         'sedes.destroy'
        // ]);
        // Permission::create(['name' => 'rooms.index', 'privilege' => 'rooms.index']);
        // Permission::create([
        //     'name'
        //     => 'rooms.create',
        //     'privilege' => 'rooms.create'
        // ]);
        // Permission::create([
        //     'name' => 'rooms.store',
        //     'privilege' =>
        //         'rooms.store'
        // ]);
        // Permission::create(['name' => 'rooms.show', 'privilege' => 'rooms.show']);
        // Permission::create([
        //     'name' =>
        //         'rooms.edit',
        //     'privilege' => 'rooms.edit'
        // ]);
        // Permission::create([
        //     'name' => 'rooms.update',
        //     'privilege' =>
        //         'rooms.update'
        // ]);
        // Permission::create([
        //     'name' => 'rooms.destroy',
        //     'privilege' =>
        //         'rooms.destroy'
        // ]);
        // Permission::create([
        //     'name' => 'resources.index',
        //     'privilege' =>
        //         'resources.index'
        // ]);
        // Permission::create([
        //     'name' => 'resources.create',
        //     'privilege' =>
        //         'resources.create'
        // ]);
        // Permission::create([
        //     'name' => 'resources.store',
        //     'privilege' =>
        //         'resources.store'
        // ]);
        // Permission::create([
        //     'name' => 'resources.show',
        //     'privilege' =>
        //         'resources.show'
        // ]);
        // Permission::create([
        //     'name' => 'resources.edit',
        //     'privilege' =>
        //         'resources.edit'
        // ]);
        // Permission::create([
        //     'name' => 'resources.update',
        //     'privilege' =>
        //         'resources.update'
        // ]);
        // Permission::create([
        //     'name' => 'resources.destroy',
        //     'privilege' =>
        //         'resources.destroy'
        // ]);
        // Permission::create([
        //     'name' => 'periodos.index',
        //     'privilege' =>
        //         'periodos.index'
        // ]);
        // Permission::create([
        //     'name' => 'periodos.create',
        //     'privilege' =>
        //         'periodos.create'
        // ]);
        // Permission::create([
        //     'name' => 'periodos.store',
        //     'privilege' =>
        //         'periodos.store'
        // ]);
        // Permission::create([
        //     'name' => 'periodos.show',
        //     'privilege' =>
        //         'periodos.show'
        // ]);
        // Permission::create([
        //     'name' => 'periodos.edit',
        //     'privilege' =>
        //         'periodos.edit'
        // ]);
        // Permission::create([
        //     'name' => 'periodos.update',
        //     'privilege' =>
        //         'periodos.update'
        // ]);
        // Permission::create([
        //     'name' => 'periodos.destroy',
        //     'privilege' =>
        //         'periodos.destroy'
        // ]);
        // Permission::create([
        //     'name' => 'courses.index',
        //     'privilege' =>
        //         'courses.index'
        // ]);
        // Permission::create([
        //     'name' => 'courses.create',
        //     'privilege' =>
        //         'courses.create'
        // ]);
        // Permission::create([
        //     'name' => 'courses.store',
        //     'privilege' =>
        //         'courses.store'
        // ]);
        // Permission::create([
        //     'name' => 'courses.show',
        //     'privilege' =>
        //         'courses.show'
        // ]);
        // Permission::create([
        //     'name' => 'courses.edit',
        //     'privilege' =>
        //         'courses.edit'
        // ]);
        // Permission::create([
        //     'name' => 'courses.update',
        //     'privilege' =>
        //         'courses.update'
        // ]);
        // Permission::create([
        //     'name' => 'courses.destroy',
        //     'privilege' =>
        //         'courses.destroy'
        // ]);
        // Permission::create([
        //     'name' => 'grados.index',
        //     'privilege' =>
        //         'grados.index'
        // ]);
        // Permission::create([
        //     'name' => 'grados.create',
        //     'privilege' =>
        //         'grados.create'
        // ]);
        // Permission::create([
        //     'name' => 'grados.store',
        //     'privilege' =>
        //         'grados.store'
        // ]);
        // Permission::create(['name' => 'grados.show', 'privilege' => 'grados.show']);
        // Permission::create([
        //     'name'
        //     => 'grados.edit',
        //     'privilege' => 'grados.edit'
        // ]);
        // Permission::create([
        //     'name' => 'grados.update',
        //     'privilege' =>
        //         'grados.update'
        // ]);
        // Permission::create([
        //     'name' => 'grados.destroy',
        //     'privilege' =>
        //         'grados.destroy'
        // ]);

        // Permission::create([
        //     'name' => 'schools.administrator',
        //     'privilege' =>
        //         'schools.administrator'
        // ]);
        // Permission::create([
        //     'name' => 'schools.assign',
        //     'privilege' =>
        //         'schools.assign'
        // ]);
        // Permission::create([
        //     'name' => 'sedes.coordinator',
        //     'privilege' =>
        //         'sedes.coordinator'
        // ]);
        // Permission::create([
        //     'name' => 'sedes.resource',
        //     'privilege' =>
        //         'sedes.resource'
        // ]);
        // Permission::create([
        //     'name' => 'sedes.assign',
        //     'privilege' =>
        //         'sedes.assign'
        // ]);
        // Permission::create([
        //     'name' => 'sedes.assign_resource',
        //     'privilege' =>
        //         'sedes.assign_resource'
        // ]);
        // Permission::create([
        //     'name' => 'rooms.resource',
        //     'privilege' =>
        //         'rooms.resource'
        // ]);
        // Permission::create([
        //     'name' => 'courses.requeriment',
        //     'privilege' =>
        //         'courses.requeriment'
        // ]);
        // Permission::create([
        //     'name' => 'courses.goal',
        //     'privilege' =>
        //         'courses.goal'
        // ]);
        // Permission::create([
        //     'name' => 'courses.section',
        //     'privilege' =>
        //         'courses.section'
        // ]);
        // Permission::create([
        //     'name' => 'courses.lesson',
        //     'privilege' =>
        //         'courses.lesson'
        // ]);
        // Permission::create([
        //     'name' => 'gestion.index',
        //     'privilege' =>
        //         'gestion.index'
        // ]);
        // Permission::create([
        //     'name' => 'gestion.secciones',
        //     'privilege' =>
        //         'gestion.secciones'
        // ]);
        // Permission::create([
        //     'name' => 'gestion.create_lectivo',
        //     'privilege' =>
        //         'gestion.create_lectivo'
        // ]);
        // Permission::create([
        //     'name' => 'gestion.lectivo_by_sede',
        //     'privilege' =>
        //         'gestion.lectivo_by_sede'
        // ]);
        // Permission::create([
        //     'name' => 'gestion.grados_by_sede',
        //     'privilege' =>
        //         'gestion.grados_by_sede'
        // ]);
        // Permission::create([
        //     'name' => 'gestion.add_students_to_grados_by_sede',
        //     'privilege' =>
        //         'gestion.add_students_to_grados_by_sede'
        // ]);
        // Permission::create([
        //     'name' => 'gestion.grados_and_sections_by_sede',
        //     'privilege' => 'gestion.grados_and_sections_by_sede'
        // ]);
        // Permission::create([
        //     'name' =>
        //         'gestion.assign_teacher_to_lectivo',
        //     'privilege' => 'gestion.assign_teacher_to_lectivo'
        // ]);
        // Permission::create([
        //     'name' =>
        //         'gestion.assign_teacher',
        //     'privilege' => 'gestion.assign_teacher'
        // ]);
        // Permission::create([
        //     'name' =>
        //         'gestion.grados_by_lectivo_and_sede',
        //     'privilege' => 'gestion.grados_by_lectivo_and_sede'
        // ]);
        // Permission::create([
        //     'name'
        //     => 'gestion.assign_students_to_grado',
        //     'privilege' => 'gestion.assign_students_to_grado'
        // ]);
        // Permission::create([
        //     'name' =>
        //         'gestion.students_of_sede',
        //     'privilege' => 'gestion.students_of_sede'
        // ]);
        // Permission::create([
        //     'name' =>
        //         'gestion.courses_of_sede',
        //     'privilege' => 'gestion.courses_of_sede'
        // ]);








        $super_admin_permissions = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35];
        $admin_permissions = [22, 25, 26, 29, 32, 71];
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
