<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Availabilities;

class EditDoctorModal extends Component
{
    public $isModalOpen = false; 
    public $name;
    public $days = [];
    public $startTimes = [];
    public $endTimes = [];
    public $doctor_id;
    public $doctor;

    public function mount($doctor)
    {
        // $this->doctor_id = $doctor->id;
        $this->doctor = User::find($doctor->id);
        $this->name = $doctor->name;

        // Initialize existing availabilities
        $availabilities = $doctor->availability;
        foreach ($availabilities as $availability) {
            $this->days[] = $availability->day_of_week;
            $this->startTimes[] = $availability->start_time;
            $this->endTimes[] = $availability->end_time;
        }
    }

    public function updateDoctorInformation()
    {
        // Validate input if needed

        // Save updated doctor information
        $doctor = User::find($this->doctor->id);
        $doctor->name = $this->name;
        $doctor->save();

        // Clear existing availabilities
        Availabilities::where('doctor_id', $doctor->id)->delete();

        // Create new availabilities
        foreach ($this->days as $index => $day) {
            Availabilities::create([
                'doctor_id' => $doctor->id,
                'day_of_week' => $day,
                'start_time' => $this->startTimes[$index],
                'end_time' => $this->endTimes[$index],
            ]);
        }

        // Close the modal
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.edit-doctor-modal');
    }

    public function openEditModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }
}
