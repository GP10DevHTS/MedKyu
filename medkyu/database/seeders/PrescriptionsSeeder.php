<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;


class PrescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all users with role 'student' and 'doctor'
        $students = User::role('student')->pluck('id')->toArray();
        $doctors = User::role('doctor')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('prescriptions')->insert([
                'doctor_id' => $faker->randomElement($doctors),
                'patient_id' => $faker->randomElement($students),
                'drug_name' => $faker->word,
                'dosage' => $faker->word,
                'frequency' => $faker->randomElement(['Once a day', 'Twice a day', 'Thrice a day', 'As needed']),
                'duration' => $faker->randomElement(['1 week', '2 weeks', '1 month']),
                'instructions' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
