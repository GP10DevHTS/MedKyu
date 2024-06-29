<?php

namespace Database\Seeders;

use App\Models\Allergy;
use App\Models\BloodGroup;
use App\Models\Department;
use App\Models\DiseaseRecord;
use App\Models\Doctor;
use App\Models\LabTest;
use App\Models\Patient;
use App\Models\Room;
use App\Models\SurgeryHistory;
use App\Models\TransfusionHistory;
use App\Models\User;
use App\Models\Ward;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(100)->create();
        $chances =  [1,2,3,4];

        foreach ($users as $user) {
            $chance = array_rand($chances);
            if ($chance == 1) {
                $user->assignRole('admin');
            } elseif ($chance == 2) {
                Doctor::create(['user_id' => $user->id]);
                $user->assignRole('doctor');
            } elseif($chance == 3) {
                Patient::create(['user_id' => $user->id, 'blood_group_id' => BloodGroup::all()->random()->id]);
                $user->assignRole('patient');
            }
        }

        $departments = [
            ['department_name' => 'Emergency Department', 'department_description' => 'Provides immediate treatment for acute illnesses and injuries.'],
            ['department_name' => 'Intensive Care Unit', 'department_description' => 'Provides intensive treatment and monitoring for critically ill patients.'],
            ['department_name' => 'Cardiology', 'department_description' => 'Specializes in the diagnosis and treatment of heart conditions.'],
            ['department_name' => 'Neurology', 'department_description' => 'Specializes in the diagnosis and treatment of nervous system disorders.'],
            ['department_name' => 'Orthopedics', 'department_description' => 'Focuses on the diagnosis and treatment of the musculoskeletal system.'],
            ['department_name' => 'Pediatrics', 'department_description' => 'Provides medical care for infants, children, and adolescents.'],
            ['department_name' => 'Obstetrics and Gynecology', 'department_description' => 'Specializes in women\'s reproductive health, pregnancy, and childbirth.'],
            ['department_name' => 'Oncology', 'department_description' => 'Specializes in the diagnosis and treatment of cancer.'],
            ['department_name' => 'Radiology', 'department_description' => 'Uses imaging technology to diagnose and treat diseases.'],
            ['department_name' => 'Gastroenterology', 'department_description' => 'Focuses on the digestive system and its disorders.'],
            ['department_name' => 'Nephrology', 'department_description' => 'Specializes in kidney care and treating diseases of the kidneys.'],
            ['department_name' => 'Dermatology', 'department_description' => 'Focuses on the skin and its diseases.'],
            ['department_name' => 'Ophthalmology', 'department_description' => 'Specializes in the treatment of eye disorders.'],
            ['department_name' => 'Ear, Nose, and Throat', 'department_description' => 'Specializes in conditions of the ear, nose, and throat.'],
            ['department_name' => 'Urology', 'department_description' => 'Focuses on the urinary tract and male reproductive organs.'],
            ['department_name' => 'Endocrinology', 'department_description' => 'Specializes in hormone-related diseases.'],
            ['department_name' => 'Hematology', 'department_description' => 'Specializes in diseases of the blood and blood-forming organs.'],
            ['department_name' => 'Rheumatology', 'department_description' => 'Focuses on autoimmune diseases and musculoskeletal conditions.'],
            ['department_name' => 'Pulmonology', 'department_description' => 'Specializes in the respiratory system.'],
            ['department_name' => 'Infectious Diseases', 'department_description' => 'Focuses on the diagnosis and treatment of infectious diseases.'],
            ['department_name' => 'General Surgery', 'department_description' => 'Specializes in the diagnosis and treatment of musculoskeletal diseases.'],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }


        $wards = [
            ['name' => 'General Ward', 'type' => 'General'],
            ['name' => 'Maternity Ward', 'type' => 'Maternity'],
            ['name' => 'Pediatric Ward', 'type' => 'Pediatric'],
            ['name' => 'Surgical Ward', 'type' => 'Surgical'],
            ['name' => 'Intensive Care Unit', 'type' => 'ICU'],
            ['name' => 'Psychiatric Ward', 'type' => 'Psychiatric'],
            ['name' => 'Oncology Ward', 'type' => 'Oncology'],
            ['name' => 'Cardiology Ward', 'type' => 'Cardiology'],
            ['name' => 'Neurology Ward', 'type' => 'Neurology'],
            ['name' => 'Orthopedic Ward', 'type' => 'Orthopedic'],
        ];

        foreach ($wards as $wardData) {
            $ward = Ward::create($wardData);

            // Create random number of rooms for each ward
            $numberOfRooms = rand(5, 15);
            $y=1;
            for ($i = 0; $i < $numberOfRooms; $i++) {
                Room::create([
                    'ward_id' => $ward->id,
                    'name' => 'Room ' . ($y + 1),
                    'capacity' => rand(1, 4), // Random capacity between 1 and 4
                ]);
                $y++;
            }
        }

        $labTests = [
            ['name' => 'Complete Blood Count (CBC)'],
            ['name' => 'Basic Metabolic Panel (BMP)'],
            ['name' => 'Comprehensive Metabolic Panel (CMP)'],
            ['name' => 'Lipid Panel'],
            ['name' => 'Liver Function Tests'],
            ['name' => 'Thyroid Function Tests'],
            ['name' => 'Urinalysis'],
            ['name' => 'Hemoglobin A1c'],
            ['name' => 'Prothrombin Time (PT) / INR'],
            ['name' => 'C-reactive Protein (CRP)'],
            ['name' => 'Erythrocyte Sedimentation Rate (ESR)'],
            ['name' => 'Blood Urea Nitrogen (BUN)'],
            ['name' => 'Creatinine'],
            ['name' => 'Electrolytes Panel'],
            ['name' => 'Blood Glucose Test'],
            ['name' => 'Pregnancy Test'],
            ['name' => 'Sexually Transmitted Infection (STI) Tests'],
            ['name' => 'Vitamin D Test'],
            ['name' => 'Iron Studies'],
            ['name' => 'Celiac Disease Test'],
        ];
        
        foreach ($labTests as $labTest) {
            LabTest::create($labTest);
        }


        $commonAllergies = [
            'Peanuts',
            'Shellfish',
            'Milk',
            'Eggs',
            'Soy',
            'Wheat',
            'Tree nuts',
            'Fish',
            'Penicillin',
            'Latex',
            'Insect stings',
            'Pet dander',
            'Pollen',
            'Dust mites',
            'Mold',
        ];

        // Get all patients
        $patients = Patient::all();

        foreach ($patients as $patient) {
            $numOfAllergies = rand(0, 5);

            if ($numOfAllergies > 0) {
                $allergies = array_rand(array_flip($commonAllergies), $numOfAllergies);

                if (is_string($allergies)) {
                    $allergies = [$allergies];
                }

                foreach ($allergies as $allergy) {
                    Allergy::create([
                        'patient_id' => $patient->id,
                        'allergy' => $allergy,
                    ]);
                }
            }
        }


        $commonTransfusionTypes = [
            'Red Blood Cells',
            'Platelets',
            'Plasma',
            'Cryoprecipitate',
            'Granulocytes',
        ];

        $patients = Patient::all();

        foreach ($patients as $patient) {
            // Randomly decide if this patient should have transfusion histories (e.g., 50% chance)
            if (rand(0, 1) === 1) {
                // Randomly determine the number of transfusions for each patient
                $numOfTransfusions = rand(1, 3);

                for ($i = 0; $i < $numOfTransfusions; $i++) {
                    TransfusionHistory::create([
                        'patient_id' => $patient->id,
                        'transfusion_type' => $commonTransfusionTypes[array_rand($commonTransfusionTypes)],
                        'date' => Carbon::now()->subDays(rand(0, 365))->format('Y-m-d'),  // Random date within the last year
                    ]);
                }
            }
        }


        $commonSurgeries = [
            'Appendectomy',
            'Cataract Surgery',
            'C-Section',
            'Gallbladder Removal',
            'Hysterectomy',
            'Knee Replacement',
            'Hip Replacement',
            'Heart Bypass Surgery',
            'Tonsillectomy',
            'Hernia Repair',
        ];
        // Get all patients
        $patients = Patient::all();

        foreach ($patients as $patient) {
            if (rand(0, 1) === 1) {
                $numOfSurgeries = rand(1, 3);

                for ($i = 0; $i < $numOfSurgeries; $i++) {
                    SurgeryHistory::create([
                        'patient_id' => $patient->id,
                        'surgery' => $commonSurgeries[array_rand($commonSurgeries)],
                        'date' => Carbon::now()->subDays(rand(0, 3650))->format('Y-m-d'),  // Random date within the last 10 years
                    ]);
                }
            }
        }    
        
        

        $majorDiseases = [
            'Diabetes',
            'Hypertension',
            'Heart Disease',
            'Chronic Kidney Disease',
            'Chronic Obstructive Pulmonary Disease (COPD)',
            'Asthma',
            'Cancer',
            'Stroke',
            'HIV/AIDS',
            'Alzheimer\'s Disease',
        ];


        // Get all patients
        $patients = Patient::all();

        foreach ($patients as $patient) {
            // Randomly decide if this patient should have disease records (e.g., 50% chance)
            if (rand(0, 1) === 1) {
                // Randomly determine the number of diseases for each patient
                $numOfDiseases = rand(1, 3);

                for ($i = 0; $i < $numOfDiseases; $i++) {
                    DiseaseRecord::create([
                        'patient_id' => $patient->id,
                        'disease' => $majorDiseases[array_rand($majorDiseases)],
                    ]);
                }
            }
        }

        
    }
}
