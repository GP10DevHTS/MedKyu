<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminEditMedicalHistory extends Component
{
    public $student;
    public function mount($id){
        $this->student = User::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.admin-edit-medical-history');
    }
}
