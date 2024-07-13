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

    public function render()
    {
        
        return view('livewire.users.new-patient');
    }
    public function is_student(){
        return $this->is_student = true;
    }
    public function create(Request $request){
        // Validate the request data if needed
        // $request->validate([
        //     'regno' => 'required|string|min:10',
        //     // 'pwd' => ['required', 'string', Password::defaults()],
        // ]);

        // Access the registration number from the request
        // $regno = $request->input('regno');
        // $password = Hash::make($request->input('pwd'));

        // Use the registration number as needed
        // $stdData = $this->getStudDetails($regno);

        // // Extract relevant student data
        // $surname = $stdData['surname'] . " " . $stdData['other_names'];
        // $email = $regno . '@std.kyu.ac.ug';
        // $avatar = $stdData['avatar'];

        //Check if the user already exists
        // if(User::where('email', $email)->exists()){
        //     return redirect()->back()->with('error', 'User already exists!');
        // }
        

        // Create the user
        // $user = User::create([
        //     'name' => $surname,
        //     'email' => $email,
        //     // 'password' => $password,
        //     // =====>>> 'profile_photo_path' => "https://myportal.kyu.ac.ug/photos/student-photos/".$avatar,
        // ]);


          // Download the avatar from the remote server and store it locally
        //  $photo = "https://myportal.kyu.ac.ug/photos/student-photos/".$avatar;
        //  $user->profile_photo_path = $photo;
        //  $user->save();


        // Auth::login($user);

        
        

        // return redirect()->route('dashboard')->with('success', 'User created successfully!');
    }



    public function registerNewUser()
    {
        
        $this->create( request() );
        $this->validate();
        if ($this->is_student) {
            $this->validate([
                'student_number' => 'required|numeric'
            ]);
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
        ]);
        $this->reset();

        noty()->addSuccess('New administrator details added successfully');

        Patient::create([
            'user_id' => $user->id
        ]);

        $this->sendNotificationEmail($user, $pwd);
    }
    protected function getStudDetails($regno){
        $response = Http::get('https://documents.kyu.ac.ug/api/v1/verifications/registration',
            ['studentNumber' => $regno]
        );

        if($response->successful()){
            $data = $response->json();
            
            $stdData = $data['data']['student'];
            return $stdData;
        }

        abort($response->status(), $response['message']);

    }

    public function sendNotificationEmail($user, $pwd)
    {
        Mail::to($user->email)->send(new NewPatientRegistrationNotification($pwd));
    }
}
