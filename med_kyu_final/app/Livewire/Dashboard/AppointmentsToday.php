<?php

namespace App\Livewire\Dashboard;

use App\Models\Appointment;
use Livewire\Component;

class AppointmentsToday extends Component
{
    public function render()
    {
        return view('livewire.dashboard.appointments-today',[
            'appointments' => Appointment::whereDate('created_at',date('Y-m-d'))->get(),
        ]);
    }
}
