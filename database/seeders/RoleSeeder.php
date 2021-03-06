<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
          ["name" => "Super Admin"],
          ["name" => "Admin"],
          ["name" => "Support"],
          ["name" => "HR"],
          ["name" => "Finance"]
        ];

        foreach ($roles as $role) {
            Role::create($role);
            dump($role);
        }
    }
}
