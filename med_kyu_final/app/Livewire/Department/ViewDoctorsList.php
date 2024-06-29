<?php

namespace App\Livewire\Department;

use Livewire\Component;

class ViewDoctorsList extends Component
{
    public $department;
    
    public $viewDoctorModal_isOpen = false;

    public function openViewDoctorModal(){
        $this->viewDoctorModal_isOpen = true;
    }

    public function closeViewDoctorModal(){
        $this->viewDoctorModal_isOpen = false;
    }

    public function mount($department)
    {
        $this->department = $department;
    }
    public function render()
    {
        return view('livewire.department.view-doctors-list',[
            'doctors' => $this->department->doctors
        ]);
    }
}
