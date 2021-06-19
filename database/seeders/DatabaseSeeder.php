<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(ProblemaSeeder::class);
        \App\Models\Planta::factory(4)->create();
         \App\Models\User::factory(10)->create();
         \App\Models\Maquina::factory(150)->create();
    }
}
