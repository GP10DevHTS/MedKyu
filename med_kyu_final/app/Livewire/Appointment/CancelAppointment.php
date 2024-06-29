<?php

namespace App\Livewire\Appointment;

use Livewire\Attributes\Validate;
use Livewire\Component;

class CancelAppointment extends Component
{
    public $appointment;
    public $cancelAppointmentModal_isOpen = false;
    
    #[Validate('required|string')]
    public $cancellationReason;
    public function openCancelAppointmentModal()
    {
        $this->cancelAppointmentModal_isOpen = true;
    }

    public function closeCancelAppointmentModal()
    {
        $this->cancelAppointmentModal_isOpen = false;
    }

    public function mount($appointment)
    {
        $this->appointment = $appointment;
    }

    public function render()
    {
        return view('livewire.appointment.cancel-appointment');
    }

    public function cancelAppointment(){
        $this->validate();
        $this->appointment->cancel_reason = $this->cancellationReason;
        $this->appointment->status = 2;
        $this->appointment->save();
        
        $this->appointment->delete();

        noty()->addSuccess('Appointment cancelled');
        $this->closeCancelAppointmentModal();
    }
}
