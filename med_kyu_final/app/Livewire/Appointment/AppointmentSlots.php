<?php

namespace App\Livewire\Appointment;

use App\Models\Availability;
use Livewire\Component;

class AppointmentSlots extends Component
{
    public $appointment_slots;
    public function render()
    {
        $this->appointment_slots = Availability::all();
        return view('livewire.appointment.appointment-slots');
    }
}
