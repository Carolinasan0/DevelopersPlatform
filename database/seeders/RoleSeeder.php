<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' -> 'Admin']);
        $role2 = Role::create(['name' -> 'Recruiter']);
        $role3 = Role::create(['name' -> 'Developer']);

        Permission::create(['name' -> 'admin.home']);

        // Permission::create(['name' -> 'admin.categories.index']);
        // Permission::create(['name' -> 'admin.categories.create']);
        // Permission::create(['name' -> 'admin.categories.edit']);
        // Permission::create(['name' -> 'admin.categories.destroy']);


    }
}
