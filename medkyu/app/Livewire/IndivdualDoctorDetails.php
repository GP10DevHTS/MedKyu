<?php

namespace App\Livewire;

use App\Models\Availabilities;
use Livewire\Component;


class IndivdualDoctorDetails extends Component
{
    public $doctor;
    public function mount(Availabilities $doctor){
        $this->doctor = $doctor;
    }
    public function render()
    {
        return view('livewire.indivdual-doctor-details');
    }
}
