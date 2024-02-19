<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class permissionsAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  add fake users
        \App\Models\User::factory(10)->create(); 
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // create roles
        $role1 = Role::create(['name' => 'student']);
        $role2 = Role::create(['name' => 'doctor']);
        $role3 = Role::create(['name' => 'admin']);
        // $role4 = Role::create(['name' => 'admin1']);
        

        // create permissions
        $permission1 = Permission::create(['name' => 'login1']);
        $permission2 = Permission::create(['name' => 'view medical records1']);
        // $permission3 = Permission::create(['name' => 'create medical records1']);

        $role1->givePermissionTo($permission1);
        $role2->givePermissionTo($permission1);
        $role3->givePermissionTo($permission1);
        // $role4->givePermissionTo($permission1);

        // $role4->givePermissionTo($permission2);
        $role3->givePermissionTo($permission2);
    }
}
