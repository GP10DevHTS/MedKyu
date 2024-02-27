<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Availabilities;
use App\Models\User;

class AdminDoctorsDetails extends Component
{
    public $doctors;


    public function mount()
    {
        $this->doctors = User::role('doctor')->get();

    }

    public function render()
    {
        $this->doctors = User::role('doctor')->get();
    
        return view('livewire.admin-doctors-details');
    }
}
