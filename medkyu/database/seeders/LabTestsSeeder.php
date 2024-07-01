<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;


class LabTestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();

        // $doctorIds = User::role('doctor')->pluck('id')->toArray();
        // $studentIds = User::role('student')->pluck('id')->toArray();

        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('lab_tests')->insert([
        //         'test_name' => $faker->word,
        //         'sample_type' => $faker->randomElement(['Blood', 'Urine', 'Saliva', 'Tissue']),
        //         'result_value' => $faker->randomFloat(2, 1, 100),
        //         'reference_range' => $faker->randomFloat(2, 1, 100),
        //         'interpretation' => $faker->sentence,
        //         'test_date' => $faker->date,
        //         'doctor_id' => $faker->randomElement($doctorIds),
        //         'patient_id' => $faker->randomElement($studentIds),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
