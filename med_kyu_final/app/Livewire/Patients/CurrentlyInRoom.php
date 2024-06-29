<?php

namespace App\Livewire\Patients;

use App\Livewire\Facilities\RoomsWards;
use Livewire\Component;
use App\Models\Patient;
use App\Models\PatientMovement;

class CurrentlyInRoom extends Component
{
    public $patient_id;
    public $patientMovement;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }
    public function render()
    {
        // find the patient currently in the room
        $patient = Patient::findOrFail($this->patient_id);
        $this->patientMovement = PatientMovement::where('patient_id', $patient->id)
                                     ->whereNull('moved_out_at')
                                     ->first();
        return view('livewire.patients.currently-in-room', ['patientMovement' => $this->patientMovement]);
    }
}
