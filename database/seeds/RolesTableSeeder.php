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
        $names = [
            'admin',
            'maintainer',
            'agent',
            'operator',
            'member'
        ];

        foreach ($names as $name) {
            $role = Role::create(['name' => $name]);
            if ($name == 'admin'){
                $permissions = Permission::pluck('id','id')->all();
                $role->syncPermissions($permissions);
            }
        }
    }
}
