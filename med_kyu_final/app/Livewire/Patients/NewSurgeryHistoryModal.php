<?php

namespace App\Livewire\Patients;

use Livewire\Component;
use App\Models\SurgeryHistory;

class NewSurgeryHistoryModal extends Component
{
    public $patient_id;
    public $surgery;
    public $date;
    public $newSurgeryHistoryModalIsOpen = false;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }

    public function newSurgeryHistoryModal()
    {
        $this->newSurgeryHistoryModalIsOpen = true;
    }

    public function createSurgeryHistory()
    {
        $this->validate([
            'patient_id' => 'required|exists:patients,id',
            'surgery' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        SurgeryHistory::create([
            'patient_id' => $this->patient_id,
            'surgery' => $this->surgery,
            'date' => $this->date,
        ]);
        $this->patient_id = '';
        $this->surgery = '';
        $this->date = '';
        $this->newSurgeryHistoryModalIsOpen = false;

        noty()->addSuccess('Surgery history created successfully');
    }

    public function render()
    {
        return view('livewire.patients.new-surgery-history-modal');
    }
}
