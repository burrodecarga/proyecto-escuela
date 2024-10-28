<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'administrator']);
        Role::create(['name' => 'coordinator']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student-basic']);
        Role::create(['name' => 'student-middle']);
        Role::create(['name' => 'student-high']);
        Role::create(['name' => 'parent']);
        Role::create(['name' => 'secretary']);
        Role::create(['name' => 'data-manager']);
        Role::create(['name' => 'employee']);
        Role::create(['name' => 'inactive']);
        Role::create(['name' => 'no role']);
    }
}
