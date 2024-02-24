<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MedicalInformation;

class AllStudentsMedHistorytable extends Component
{
    public $medical_History;
    public function mount()
    {
        $this->medical_History = MedicalInformation::all();
    }
    
    public function render()
    {
        return view('livewire.all-students-med-historytable');
    }
}
