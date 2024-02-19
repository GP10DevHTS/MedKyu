<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class availabiltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming student IDs range from 1 to 100
        $studentIds = range(1, 100);

        // Define days of the week
        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        foreach ($studentIds as $studentId) {
            // Generate random availability records for each student
            for ($i = 0; $i < 5; $i++) { // Generating availability for 5 days a week
                DB::table('availabilty')->insert([
                    'doctor_id' => $studentId,
                    'day_of_week' => $faker->randomElement($daysOfWeek),
                    'start_time' => $faker->time('H:i'),
                    'end_time' => $faker->time('H:i'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
