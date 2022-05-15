<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_adm = Role::create(['name' => 'admin']);
        $role_wri = Role::create(['name' => 'writer']);
        $role_usr = Role::create(['name' => 'user']);
        $role_std = Role::create(['name' => 'student']);



    }
}
