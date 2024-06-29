<?php

namespace App\Livewire\Patients;

use App\Models\Patient;
use App\Models\User;
use Livewire\Component;

class ClinicalRecordTab extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = User::find($user);
    }
    public function render()
    {
        
        return view('livewire.patients.clinical-record-tab');
    }
}
