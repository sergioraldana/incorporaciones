<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesYPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Solicitudes
        Permission::create(['name' => 'crear solicitudes']);
        Permission::create(['name' => 'ver solicitudes']);
        Permission::create(['name' => 'editar solicitudes']);
        Permission::create(['name' => 'eliminar solicitudes']);

        // Estudiante
        $role = Role::create(['name' => 'estudiante'])
            ->givePermissionTo(['crear solicitudes', 'ver solicitudes']);


        // Super Admin
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
