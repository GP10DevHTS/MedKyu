<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserMgtPermissions::class,
            DashboardTableSeeder::class,
            BloodGroupsSeeder::class,
            PatientPermissionsSeeder::class,
            DoctorPermissionsSeeder::class,
            departmentPermissions::class,
            appointmentPermissions::class,
            DoctorAvailabilityPermissions::class,
            MoreAppointmentPermissions::class,
            facilitiesPermissionsSeeder::class,
            PatientMedicalPermissionsSeeder::class,





            UsersSeeder::class,
        ]);
    }
}
