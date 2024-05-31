<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class EditDoctorModal extends Component
{

    public $isModalOpen = false; 
    public $name;
    public $days = [];
    public $startTimes = [];
    public $endTimes = [];
    public $doctor_id;
    // public function mount($doctor){
    //     $this->name = $doctor->name;

    // }
    public function updateDoctorInformation()
    {
        // Validate input if needed

        // Save updated doctor information
        $doctor = User::find($this->doctorId);
        $doctor->name = $this->name;
        $doctor->save();

        // Save availabilities
        $doctor->availabilities()->delete(); // Clear existing availabilities
        foreach ($this->days as $index => $day) {
            $doctor->availabilities()->create([
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
