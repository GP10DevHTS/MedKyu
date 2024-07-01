<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Assuming your User model is in the App\Models namespace

class MedicalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $students = User::role('student')->pluck('id')->toArray();

        // foreach ($students as $studentId) {
        //     DB::table('medical_information')->insert([
        //         'student_id' => $studentId,
        //         'blood_type' => 'Blood Type for Student ' . $studentId,
        //         'medical_history' => 'Medical History for Student ' . $studentId,
        //         'allergies' => 'Allergies for Student ' . $studentId,
        //         'current_medications' => 'Current Medications for Student ' . $studentId,
        //         'special_needs' => 'Special Needs for Student ' . $studentId,
        //         'chronical_illnesses' => 'Chromical Illnesses for Student ' . $studentId,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
