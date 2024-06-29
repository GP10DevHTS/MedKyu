<?php

namespace App\Livewire\Facilities;

use App\Models\LabTest;
use Livewire\Component;

class LabTestsList extends Component
{
    public function render()
    {
        return view('livewire.facilities.lab-tests-list',[
            'labTests' => LabTest::all()
        ]);
    }
}
