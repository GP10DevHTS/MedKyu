<?php

namespace App\Livewire\Patients;

use Livewire\Component;
use App\Models\Patient;
use Illuminate\Validation\Rule;

class EditNokDetails extends Component
{
    public $patient;
    public $nok_name;
    public $nok_email;
    public $nok_phone;

    public $isOpen = false;

    public function mount($patient)
    {
        // Load the patient's next of kin details
        $this->patient = Patient::findOrFail($patient);
        $this->nok_name = $this->patient->nok_name;
        $this->nok_email = $this->patient->nok_email;
        $this->nok_phone = $this->patient->nok_phone;
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function updateNokDetails()
    {
        // Validate input
        $validatedData = $this->validate([
            'nok_name' => 'required|string|max:255',
            'nok_email' => 'nullable|email|max:255',
            'nok_phone' => 'nullable|string|max:20',
        ]);

        // Update the patient's NOK details
        $this->patient->update($validatedData);

        // Notify the user of the success
        noty()->addSuccess('Next of kin details updated successfully.');

        // Close the modal
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.patients.edit-nok-details');
    }
}
