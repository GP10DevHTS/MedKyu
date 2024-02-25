<?php

namespace App\Livewire;

use App\Models\Availabilities;
use App\Models\User;
use Livewire\Component;


class IndivdualDoctorDetails extends Component
{
    public $doctor;
    public $user;
    public $availabilities;
    public function mount($id){
        $this->doctor = Availabilities::findOrFail($id);
        $this->availabilities = Availabilities::where('doctor_id', $id)->get();
    }
    public function render()
    {
        return view('livewire.indivdual-doctor-details');
    }
}
