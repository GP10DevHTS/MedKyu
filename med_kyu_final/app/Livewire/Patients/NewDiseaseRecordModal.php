<?php

namespace App\Livewire\Patients;

use Livewire\Component;
use App\Models\DiseaseRecord;

class NewDiseaseRecordModal extends Component
{
    public $patient_id;
    public $disease;
    public $newDiseaseRecordModalIsOpen = false;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }

    public function newDiseaseRecordModal()
    {
        $this->newDiseaseRecordModalIsOpen = true;
    }

    public function createDiseaseRecord()
    {
        $this->validate([
            'patient_id' => 'required|exists:patients,id',
            'disease' => 'required|string|max:255',
        ]);

        DiseaseRecord::create([
            'patient_id' => $this->patient_id,
            'disease' => $this->disease,
        ]);

        $this->patient_id = '';
        $this->disease = '';
        
        $this->newDiseaseRecordModalIsOpen = false;
        noty()->addSuccess('Disease record created successfully');
    }
    public function render()
    {
        return view('livewire.patients.new-disease-record-modal');
    }
}
