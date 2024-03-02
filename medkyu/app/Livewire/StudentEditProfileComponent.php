<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class StudentEditProfileComponent extends Component
{
    public $student;
    // public $showEditProfileModal = false;
    public function mount($id){
        $this->student = User::findOrFail($id);
        
    }
    
    public function render()
    {
        return view('livewire.student-edit-profile-component');
    }
}
