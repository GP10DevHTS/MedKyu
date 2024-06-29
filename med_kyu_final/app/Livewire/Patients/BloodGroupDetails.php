<?php

namespace App\Livewire\Patients;

use App\Models\BloodGroup;
use App\Models\Patient;
use Livewire\Component;

class BloodGroupDetails extends Component
{
    public $patient;
    public $bloodGroups;
    public $blood_group_id;

    public $editBloodGroupModal_isOpen = false;

    public function mount($patient)
    {
        $this->patient = Patient::find($patient);
        $this->bloodGroups = BloodGroup::all();
        $this->blood_group_id = $this->patient->blood_group_id;
    }

    public function render()
    {
        return view('livewire.patients.blood-group-details');
    }

    public function openEditBloodGroupModal()
    {
        $this->editBloodGroupModal_isOpen = true;
    }

    public function closeEditBloodGroupModal()
    {
        $this->editBloodGroupModal_isOpen = false;
    }

    public function updateBloodGroup(){

        $this->patient->update([
            'blood_group_id' => $this->blood_group_id
        ]);

        noty()->addSuccess('Blood group updated successfully');

        $this->closeEditBloodGroupModal();
    }
}
