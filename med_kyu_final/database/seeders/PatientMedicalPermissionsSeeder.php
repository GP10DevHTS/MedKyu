<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PatientMedicalPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Define the permissions
       $permissions = [
        'create-new-patient-disease-record',
        'create-new-patient-allergy',
        'create-new-patient-surgery-history',
        'create-new-patient-transfusion-history'
    ];

    // Create each permission
    foreach ($permissions as $permission) {
        Permission::firstOrCreate(['name' => $permission]);
    }
    $adminRole = Role::where('name', 'admin')->first();
        if (!$adminRole) {
            $adminRole = Role::create(['name' => 'admin']);
        }

        foreach ($permissions as $permission) {
            $adminRole->givePermissionTo($permission);
        }
    }
}
