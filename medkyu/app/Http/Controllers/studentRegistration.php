<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class studentRegistration extends Controller
{
    public function index(){
        if(!config('registrations.students.reg')){
          abort(403, 'Student registrations are not currently accepted.');
        }

        return view('students.regform');
    }

    public function create(Request $request){
        // Validate the request data if needed
        $request->validate([
            'regno' => 'required|string|min:10',
            'pwd' => ['required', 'string', Password::defaults()],
        ]);

        // Access the registration number from the request
        $regno = $request->input('regno');
        $password = Hash::make($request->input('pwd'));

        // Use the registration number as needed
        $stdData = $this->getStudDetails($regno);

        // Extract relevant student data
        $surname = $stdData['surname'] . " " . $stdData['other_names'];
        $email = $regno . '@std.kyu.ac.ug';
        $avatar = $stdData['avatar'];

        // Create the user
        $user = User::create([
            'name' => $surname,
            'email' => $email,
            'password' => $password,
            // =====>>> 'profile_photo_path' => "https://myportal.kyu.ac.ug/photos/student-photos/".$avatar,
        ]);


          // Download the avatar from the remote server and store it locally
         $photo = "https://myportal.kyu.ac.ug/photos/student-photos/".$avatar;
         $user->profile_photo_path = $photo;
         $user->save();


        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'User created successfully!');
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
}
