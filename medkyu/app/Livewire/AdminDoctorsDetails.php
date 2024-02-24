<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Availability;

class AdminDoctorsDetails extends Component
{
    public $doctors;

    public function mount()
    {
        // Fetch all doctors with their availability details
        // $this->doctors = Availability::with('doctor')->get();
    }
    
    public function render()
    {
        return view('livewire.admin-doctors-details');
    }
}
