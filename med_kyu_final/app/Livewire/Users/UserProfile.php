<?php

namespace App\Livewire\Users;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Livewire\Component;

class UserProfile extends Component
{
    public $user;
    public $isDoctor;
    public $isPatient;

    public function mount($user){
        $this->user = User::find($user);
        $this->isDoctor = Doctor::where('user_id', $this->user->id)->exists();
        $this->isPatient = Patient::where('user_id', $this->user->id)->exists();
    }
    public function render()
    {
        if ($this->isDoctor) {
            if(!auth()->user()->can('view-doctors')) abort(403);
        } elseif($this->isPatient) {
            if(!auth()->user()->can('view-patients')) abort(403);
        } else{
            if(!auth()->user()->can('view-users')) abort(403);
        }
        
        return view('livewire.users.user-profile');
    }
}
