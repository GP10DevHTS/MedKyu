<?php

namespace App\Livewire\Patients;

use Livewire\Component;
use App\Models\Patient;

class MovementsTab extends Component
{
    public $patient;


    public function mount($patient) {
        $this->patient = Patient::find($patient);
    }

    public function render()
    {
        return view('livewire.patients.movements-tab');
    }
}
