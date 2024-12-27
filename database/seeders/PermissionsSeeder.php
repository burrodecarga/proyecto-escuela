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

        $json = File::get('database/data/routes.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            $ppermission = new Permission();

            $ppermission->name = $obj->name;
            $ppermission->privilege = $obj->name;

            $ppermission->save();
        }


        $super_admin_permissions = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35];
        $admin_permissions = [22, 25, 26, 29, 32, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 71];
        $coordinator_permissions = [8, 9, 10, 11, 12, 13, 14, 57, 58, 58, 60, 61, 62, 63];
        $teacher_permissions = [64, 65, 66, 67, 68, 69, 70];
        //$admin_permissions = [2, 44, 45, 46, 47, 48, 49, 50];
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
