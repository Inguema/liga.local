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
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'user']);

        Permission::create(['name' => 'admin'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.club.index']);
        Permission::create(['name' => 'admin.club.create']);
        Permission::create(['name' => 'admin.club.edit']);
        Permission::create(['name' => 'admin.club.destroy']);

        Permission::create(['name' => 'admin.equipo.index']);
        Permission::create(['name' => 'admin.equipo.create']);
        Permission::create(['name' => 'admin.equipo.edit']);
        Permission::create(['name' => 'admin.equipo.destroy']);
    }
}
