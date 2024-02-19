<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;

class EmergencyContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get only user IDs where the role is 'student'
        $studentIds = User::role('student')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('emergency_contacts')->insert([
                'student_id' => $faker->randomElement($studentIds),
                'relationship' => $faker->randomElement(['Parent', 'Sibling', 'Relative', 'Friend']),
                'address' => $faker->address,
                'contact_name' => $faker->name,
                'contact_number' => $faker->phoneNumber,
                'contact_email' => $faker->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
