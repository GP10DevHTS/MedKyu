<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;

class InsuranceInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();

        // $studentIds = User::role('student')->pluck('id')->toArray();

        // foreach ($studentIds as $studentId) {
        //     DB::table('insurance_information')->insert([
        //         'student_id' => $studentId,
        //         'insurance_name' => $faker->company,
        //         'insurance_number' => $faker->randomNumber(),
        //         'insurance_provider' => $faker->company,
        //         'policy_number' => $faker->randomNumber(),
        //         'coverage_details' => $faker->paragraph,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
