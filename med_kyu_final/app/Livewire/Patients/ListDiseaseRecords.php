<?php

namespace App\Livewire\Patients;

use Livewire\Component;
use App\Models\DiseaseRecord;

class ListDiseaseRecords extends Component
{
    public $patient_id;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }
    public function render()
    {
        $diseaseRecords = DiseaseRecord::where('patient_id', $this->patient_id)->get();
        return view('livewire.patients.list-disease-records', compact('diseaseRecords'));
    }
}
