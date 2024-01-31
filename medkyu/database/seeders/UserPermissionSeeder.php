<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  add fake users
        \App\Models\User::factory(10)->create(); 
        // Reset cached roles and permissions
        \App\Models\User::factory(100)->create();

        // Retrieve all users
        $users = User::all();

        // Retrieve all permissions
        $permissions = Permission::all();

        // Retrieve all roles
        $roles = Role::all();

        // Assign random permissions to each user
        $users->each(function ($user) use ($permissions, $roles) {
            // 70% chance of having permissions
            if (rand(1, 100) <= 10) {
                // Assign random permissions
                $user->givePermissionTo($permissions->random());
            }

            // 50% chance of having a role
            if (rand(1, 100) <= 90) {
                // Assign random role
                $user->assignRole($roles->random());
            }
        });

    }
}
