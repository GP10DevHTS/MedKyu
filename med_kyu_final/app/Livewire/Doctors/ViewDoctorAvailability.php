<?php

namespace App\Livewire\Doctors;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Availability;
use App\Models\Doctor; // Make sure to import the Doctor model

class ViewDoctorAvailability extends Component
{
    public $doctor;
    public $availabilitySlots;
    public $currentYearMonth;
    public $startDayOfWeek;
    public $daysInMonth;

    public function mount($doctor)
    {
        $this->doctor = Doctor::findOrFail($doctor);

        // Fetch availability slots for the specific doctor
        $this->availabilitySlots = Availability::where('doctor_id', $this->doctor->id)->get();

        $now = Carbon::now();
        $this->currentYearMonth = $now->format('Y-m');
        $startOfMonth = $now->copy()->startOfMonth();
        $this->startDayOfWeek = $startOfMonth->dayOfWeek;
        $this->daysInMonth = range(1, $startOfMonth->daysInMonth);
    }

    public function render()
    {
        return view('livewire.doctors.view-doctor-availability');
    }
}
