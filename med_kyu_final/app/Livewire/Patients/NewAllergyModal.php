<?php

namespace App\Livewire\Patients;

use App\Models\Allergy;
use App\Models\Patient;
use Livewire\Component;

class NewAllergyModal extends Component
{
    public $patient_id;
    public $allergy;
    public $newAllergyModalIsOpen = false;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }

    public function newAllergyModal()
    {
        $this->newAllergyModalIsOpen = true;
    }

    public function createAllergy()
    {
        $this->validate([
            'patient_id' => 'required|exists:patients,id',
            'allergy' => 'required|string|max:255',
        ]);

        Allergy::create([
            'patient_id' => $this->patient_id,
            'allergy' => $this->allergy,
        ]);

        // Reset the form fields and close the modal
        $this->patient_id = '';
        $this->allergy = '';
        $this->newAllergyModalIsOpen = false;
        noty()->addSuccess('Allergy created successfully');
    }

    public function render()
    {
        $allergies = Allergy::where('patient_id', $this->patient_id)->get();
        return view('livewire.patients.new-allergy-modal', compact('allergies'));
    }
}
