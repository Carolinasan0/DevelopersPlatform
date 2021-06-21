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
        $role2 = Role::create(['name' => 'Reclutador']);
        $role3 = Role::create(['name' => 'Desarrollador']);

        Permission::create([
            'name' => 'admin.home',
            'description' => 'Ver el dashboard'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver listado de usuarios'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Asignar un rol'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver listado de categorías'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear categorías'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Editar categorías'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.destroy',
            'description' => 'Eliminar categorías'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.tecnologies.index',
            'description' => 'Ver listado de tecnologías'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.tecnologies.create',
            'description' => 'Crear tecnologías'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.tecnologies.edit',
            'description' => 'Editar tecnologías'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.tecnologies.destroy',
            'description' => 'Eliminar tecnologías'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.vacancies.index',
            'description' => 'Ver listado de vacantes'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.vacancies.create',
            'description' => 'Crear vacantes'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.vacancies.edit',
            'description' => 'Editar vacantes'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.vacancies.destroy',
            'description' => 'Eliminar vacantes'
        ])->syncRoles([$role1, $role2]);
    }
}
