<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ["name" => "user_view"],
            ["name" => "user_update"],
            ["name" => "user_create"],
            ["name" => "user_delete"]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
            Role::find(1)->givePermissionTo($permission);
        }
    }
}
