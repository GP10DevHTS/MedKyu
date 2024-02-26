<?php

namespace App\Livewire;

use App\Models\Availabilities;
use App\Models\User;
use Livewire\Component;
use App\Models\LabTest;


class IndivdualDoctorDetails extends Component
{
    public $doctor;
    public $users;
    public $availabilities;
    public $testResults;
    public function mount($id){
        $this->doctor = Availabilities::findOrFail($id);
        $this->availabilities = Availabilities::where('doctor_id', $id)->get();

        // dd($this->availabilities);
        // dd($this->testResults);




    }
    public function render()
    {
        return view('livewire.indivdual-doctor-details');
    }
}
