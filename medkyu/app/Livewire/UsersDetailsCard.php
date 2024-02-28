<?php

namespace App\Livewire;

use App\Models\EmergencyContact;
use App\Models\InsuranceInformation;
use Livewire\Component;
use App\Models\User;

class UsersDetailsCard extends Component
{
    // public $userId;
    public $user;
    public $emergency_contacts;
    public $insurance_information;
    public $medical_history;
    public $lab_tests;
    // public $showUserDetailsModal = false;

    public function mount($id){
       $this->user = User::findOrFail($id);
    //    $this->emergency_contacts = User::with('emergency_contacts','insurance_information','medical_history','lab_tests')->where('id', $id)->get();

    }
    

    public function render()
    {
        return view('livewire.users-details-card');
    }
}
