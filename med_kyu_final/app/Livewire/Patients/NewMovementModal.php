<?php

namespace App\Livewire\Patients;

use App\Models\PatientMovement;
use App\Models\Room;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;

class NewMovementModal extends Component
{
    public $patient_id;
    #[Validate('required|exists:rooms,id')]
    public $room_id;
    #[Validate('required|date')]
    public $moved_in_at;

    public function mount($patientId)
    {
        $this->patient_id = $patientId;
    }

    public function render()
    {
        return view('livewire.patients.new-movement-modal',[
            'rooms' => Room::all(),
        ]);
    }

    public function initiatePatientMovement()
    {
        $this->validate();

        PatientMovement::create([
            'patient_id' => $this->patient_id,
            'room_id' => $this->room_id,
            'moved_in_at' => Carbon::parse($this->moved_in_at),
        ]);

        // Reset form fields
        $this->reset(['room_id', 'moved_in_at']);

        // Emit an event if needed to notify other components
        $this->dispatch('patientMovementCreated');
        noty()->addSuccess('Movement Saved');
    }

    public function cancelMovement()
    {
        $this->reset(['room_id', 'moved_in_at']);
    }
}
