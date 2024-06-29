<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class userMgtPermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-users',
            'edit-users',
            'delete-users',
            'view-users',

            'view-roles',
            'create-roles',
            'edit-roles',
            'delete-roles',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create a role
        $role = Role::create(['name' => 'admin']);

        // Assign permissions to the role
        $role->givePermissionTo($permissions);

        // Find a user by email
        $user = User::create([
            'email' => 'kirungihellena@gmail.com',
            'name' => 'kirungihellena',
            'password' => Hash::make('kali'),
            'email_verified_at' => now(),
        ]);

        // Assign the role to the user
        if ($user) {
            $user->assignRole($role);
        }

        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'patient']);
    }
}
