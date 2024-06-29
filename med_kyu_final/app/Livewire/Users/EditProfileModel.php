<?php

namespace App\Livewire\Users;

use App\Models\BloodGroup;
use App\Models\User;
use Livewire\Component;
use App\Models\Doctor;
use App\Models\Patient;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class EditProfileModel extends Component
{
    use WithFileUploads;

    public $user;
    #[Url(true)]
    public $isDoctor;
    #[Url(true)]
    public $isPatient;

    #[Validate('required|string|max:255')]
    public $name;

    #[Validate('required|email|max:255')]
    public $email;

    #[Validate('sometimes|nullable|digits|min:10|max:11')]
    public $phone;

    #[Validate('required|in:Male,Female')]
    public $gender;

    #[Validate('required|string|max:255')]
    public $address;

    #[Validate('required|date')]
    public $dob;
    public $photo;

    public $editProfileModal_isOpen = false;

    public function openEditProfileModal()
    {
        $this->editProfileModal_isOpen = true;
    }

    public function closeEditProfileModal()
    {
        $this->editProfileModal_isOpen = false;
    }

    public function mount($user)
    {
        $this->user = User::find($user);
        $this->isDoctor = Doctor::where('user_id', $this->user->id)->exists();
        $this->isPatient = Patient::where('user_id', $this->user->id)->exists();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->gender = $this->user->gender;
        $this->address = $this->user->address;
        $this->dob = $this->user->dob;
        $this->photo = $this->user->photo;
    }

    public function render()
    {
        return view('livewire.users.edit-profile-model');
    }

    public function updateProfileInformation()
    {
        // dd($this->user);
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'sometimes|nullable|string|min:10|max:20',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string|max:255',
            'dob' => 'required|date',
            'photo' => 'nullable|mimes:jpg,jpeg,png',
            // 'blood_group' => 'nullable|string|max:255',
        ]);

        if ($this->photo) {
            $path = $this->photo->store('profile-photos', 'public');
        }
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'address' => $this->address,
            'dob' => $this->dob,
            'profile_photo_path' => $path ?? $this->user->profile_photo_path,
        ]);

        noty()->addSuccess('Profile updated successfully');

        $this->closeEditProfileModal();
    }
}
