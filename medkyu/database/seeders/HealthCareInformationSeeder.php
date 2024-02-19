<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HealthCareInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming doctor IDs range from 1 to 50
        for ($i = 0; $i < 10; $i++) {
            DB::table('health_care_information')->insert([
                'doctor_id' => $faker->numberBetween(1, 50),
                'specialty' => $faker->randomElement(['Pediatrics', 'Cardiology', 'Dermatology', 'Oncology']),
                'license_number' => $faker->uuid, // You can use UUIDs or any other format suitable for license numbers
                'contact_number' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
