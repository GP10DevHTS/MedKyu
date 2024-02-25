<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Availabilities;

class AdminDoctorsDetails extends Component
{
    public $doctors;

    public function mount()
    {
        $this->doctors = Availabilities::with('doctor')->get();
        // dd($this->doctors);
    }
    
    public function render()
    {
        return view('livewire.admin-doctors-details');
    }
}
