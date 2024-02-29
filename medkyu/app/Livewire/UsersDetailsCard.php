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
    

    }
    

    public function render()
    {
        return view('livewire.users-details-card');
    }
}
