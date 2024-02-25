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
        $this->doctors = Availabilities::with('doctor')->get();

    }

    public function render()
    {
        return view('livewire.admin-doctors-details');
    }
}
