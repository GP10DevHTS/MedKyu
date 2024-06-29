<?php

namespace App\Livewire\Patients;

use App\Models\PatientMovement;
use Livewire\Component;

class MovementHistoryModal extends Component
{
    public $patient_id;
    
    public function mount($patientId)
    {
        $this->patient_id = $patientId;
    }

    public function endSession($movementId)
    {
        $movement = PatientMovement::find($movementId);
        if ($movement && !$movement->moved_out_at) {
            $movement->update(['moved_out_at' => now()]);
            // Emit an event to refresh the component if needed
            $this->dispatch('sessionEnded');
            noty()->addSuccess('Saved');
        } else {
            noty()->addWarning('Session no longer available');
        }
    }

    public function render()
    {
        return view('livewire.patients.movement-history-modal',[
            'movementHistory' => PatientMovement::where('patient_id', $this->patient_id)->orderBy('created_at','desc')->get(),
        ]);
    }
}
