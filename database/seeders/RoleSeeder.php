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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Recruiter']);
        $role3 = Role::create(['name' => 'Developer']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.tecnologies.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tecnologies.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tecnologies.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tecnologies.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.vacancies.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.vacancies.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.vacancies.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.vacancies.destroy'])->syncRoles([$role1, $role2]);
    }
}
