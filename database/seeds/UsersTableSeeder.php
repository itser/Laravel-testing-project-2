<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 49)->create()->each(function($user) {
            $role = Role::where(['name' => 'member'])->first();
            $user->assignRole([$role->id]);
        });
    }
}
