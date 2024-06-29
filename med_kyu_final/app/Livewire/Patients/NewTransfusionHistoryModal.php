<?php

namespace App\Livewire\Patients;

use Livewire\Component;
use App\Models\TransfusionHistory;

class NewTransfusionHistoryModal extends Component
{
    public $patient_id;
    public $transfusion_type;
    public $date;
    public $newTransfusionHistoryModalIsOpen = false;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }

    public function newTransfusionHistoryModal()
    {
        $this->newTransfusionHistoryModalIsOpen = true;
    }

    public function createTransfusionHistory()
    {
        $this->validate([
            'patient_id' => 'required|exists:patients,id',
            'transfusion_type' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        TransfusionHistory::create([
            'patient_id' => $this->patient_id,
            'transfusion_type' => $this->transfusion_type,
            'date' => $this->date,
        ]);

        // Reset the form fields and close the modal
        $this->transfusion_type = '';
        $this->date = '';
        $this->newTransfusionHistoryModalIsOpen = false;

        noty()->addSuccess('Transfusion History Saved');
    }
    public function render()
    {
        return view('livewire.patients.new-transfusion-history-modal');
    }
}
