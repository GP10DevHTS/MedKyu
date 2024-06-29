<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use App\Models\Doctor;
use App\Models\Patient;

class StaticProfileCard extends Component
{
    public $user;
    public $isDoctor;
    public $isPatient;

    public function mount($user)
    {
        $this->user = User::find($user);
        $this->isDoctor = Doctor::where('user_id', $this->user->id)->exists();
        $this->isPatient = Patient::where('user_id', $this->user->id)->exists();
    }
    public function render()
    {
        return view('livewire.users.static-profile-card');
    }
}
