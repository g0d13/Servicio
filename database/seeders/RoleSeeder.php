<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $role1 = Role::create(['name' => 'Administrador']);
        Role::create(['name' => 'Supervisor']);
        Role::create(['name' => 'Mecanico']);

        $user1 =  \App\Models\User::factory(['email' => 'admin@admin.com']);
        $user1->assingRole($role1);
    }
}
