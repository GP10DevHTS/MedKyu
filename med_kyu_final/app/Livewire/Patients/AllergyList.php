<?php

namespace App\Livewire\Patients;

use App\Models\Allergy;
use App\Models\Patient;
use Livewire\Component;

class AllergyList extends Component
{
    public $patient_id;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }
    public function render()
    {
        $patient = Patient::find($this->patient_id);
        $allergies = Allergy::where('patient_id', $this->patient_id)->get();
        return view('livewire.patients.allergy-list', compact('allergies', 'patient'));
    }
}
