<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'maintainer',
            'agent',
            'operator',
            'member'
        ];

        foreach ($roles as $role) {
            $role = Role::create(['name' => $role]);
            $permissions = Permission::pluck('id','id')->all();
            $role->syncPermissions($permissions);
        }
    }
}
