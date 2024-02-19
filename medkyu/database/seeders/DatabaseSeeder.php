<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionsAndRolesSeeder::class); //permissionsAndRolesSeeder
        $this->call(UserPermissionSeeder::class);
        $this->call(MedicalInformationSeeder::class);
        $this->call(EmergencyContactsSeeder::class);
        $this->call(InsuranceInformationSeeder::class);
        $this->call(HealthCareInformationSeeder::class);
        $this->call(AvailabiltySeeder::class);
        $this->call(PrescriptionsSeeder::class);
        $this->call(LabTestsSeeder::class);

        // \App\Models\User::factory(10)->create();

        $admin = \App\Models\User::factory()->create([
            'name' => 'Kirungi Hellena',
            'email' => 'kirungi@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');
        
        $student = \App\Models\User::factory()->create([
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $student->assignRole('student');
        
        $doctor = \App\Models\User::factory()->create([
            'name' => 'Doctor',
            'email' => 'doctor@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $doctor->assignRole('doctor');
            }
}
