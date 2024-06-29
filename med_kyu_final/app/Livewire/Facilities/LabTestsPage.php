<?php

namespace App\Livewire\Facilities;

use App\Models\LabTest;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LabTestsPage extends Component
{
    #[Validate('required|string')]
    public $name;
    public function render()
    {
        return view('livewire.facilities.lab-tests-page');
    }

    public function createLabTest(){
        $this->validate();
        LabTest::create([
            'name' => $this->name
        ]);
        $this->reset(['name']);
        noty()->addSuccess('Saved successfully');
    }
}
