<?php

namespace App\Livewire\Users;

use App\Mail\NewPatientRegistrationNotification;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Http;

class NewPatient extends Component
{
    use WithPagination;

    public $newDoctorModal_isOpen = false;

    #[Validate('required|string|min:3')]
    public $name;

    #[Validate('required|email')]
    public $email;

    #[Validate('required|in:male,female,other')]
    public $gender;

    #[Validate('sometimes|nullable|string|min:10|max:20')]
    public $phone;

    #[Validate('required|string|min:3')]
    public $address;

    #[Validate('required|date')]
    public $dob;

    public $is_student = false;
    public $regno;
    public $avatar_path;

    #[Validate('sometimes|nullable|string')]
    public $nok_name;
    #[Validate('sometimes|nullable|string')]
    public $nok_phone;
    #[Validate('sometimes|nullable|string')]
    public $nok_email;

    public function render()
    {

        return view('livewire.users.new-patient');
    }


    public function getStudentDetails()
    {
        $this->validate([
            'regno' => 'required|min:7|max:12'
        ]);

        $stdData = $this->getStudDetails($this->regno);
        if ($stdData) {
            // Extract relevant student data
            $this->name = $stdData['surname'] . " " . $stdData['other_names'];
            $this->email = $stdData['email'];
            $this->gender = strtolower($stdData['gender']);
            $this->phone = $stdData['phone'];

            $this->avatar_path = "https://documents.kyu.ac.ug/photos/student-photos/" . $stdData['avatar'];
        }
    }


    // public function registerNewUser()
    // {

    //     dd($this->avatar_path);

    //     // $this->create(request());
    //     $this->validate();
    //     if ($this->is_student) {
    //         $this->validate([
    //             'regno' => 'required|numeric'
    //         ]);
    //         $regno = $this->regno;
    //         $is_internal = true;
    //     } else {
    //         $is_internal = false;
    //         $regno = uniqid();
    //     }

    //     // generate random password
    //     $pwd =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 8)), 0, 8);

    //     $user = User::create([
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'gender' => $this->gender,
    //         'phone' => $this->phone,
    //         'address' => $this->address,
    //         'dob' => $this->dob,
    //         'password' => Hash::make($pwd),
    //         'profile_photo_path' =>  $this->avatar_path ?? null,
    //     ]);
    //     $this->reset();

    //     noty()->addSuccess('New patient recorded successfully');

    //     Patient::create([
    //         'user_id' => $user->id,
    //         'reg_no' => $regno,
    //         'is_internal' => $is_internal,
    //     ]);

    //     $this->sendNotificationEmail($user, $pwd);
    //     $this->reset();
    // }

    public function registerNewUser()
    {
        $this->validate();
        if ($this->is_student) {
            $this->validate([
                'regno' => 'required|numeric'
            ]);
            $regno = $this->regno;
            $is_internal = true;
        } else {
            $is_internal = false;
            $regno = uniqid();
        }

        // generate random password
        $pwd =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 8)), 0, 8);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'address' => $this->address,
            'dob' => $this->dob,
            'password' => Hash::make($pwd),
            'profile_photo_path' => $this->avatar_path ?? null,
        ]);

        Patient::create([
            'user_id' => $user->id,
            'reg_no' => $regno,
            'is_internal' => $is_internal,
            'nok_name' => !empty($this->nok_name) ? $this->nok_name : null,
            'nok_phone' => !empty($this->nok_phone) ?  $this->nok_phone : null,
            'nok_email' => !empty($this->nok_email) ?  $this->nok_email : null,
        ]);

        // Reset the input fields after saving the user
        $this->reset([
            'name',
            'email',
            'gender',
            'phone',
            'address',
            'dob',
            'is_student',
            'regno',
            'avatar_path',
            "nok_name",
            "nok_phone",
            "nok_email",
        ]);

        // Send notification email
        $this->sendNotificationEmail($user, $pwd);

        noty()->addSuccess('New patient recorded successfully');
    }

    protected function getStudDetails($regno)
    {
        $response = Http::get(
            'https://documents.kyu.ac.ug/api/v1/verifications/registration',
            ['studentNumber' => $regno]
        );

        if ($response->successful()) {
            $data = $response->json();

            $stdData = $data['data']['student'];
            return $stdData;
        }

        noty()->addError('Failed to get details of student. Check if reg number ios correct and try again');
    }

    public function sendNotificationEmail($user, $pwd)
    {
        Mail::to($user->email)->send(new NewPatientRegistrationNotification($pwd));
    }
}
