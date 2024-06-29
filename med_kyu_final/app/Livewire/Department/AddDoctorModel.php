<?php

namespace App\Livewire\Department;

use App\Models\Doctor;
use App\Models\DoctorDepartment;
use Livewire\Component;

class AddDoctorModel extends Component
{
    public $department;

    public $addDoctorModal_isOpen = false;

    public $doctor_id;

    public function openAddDoctorModal(){
        $this->addDoctorModal_isOpen = true;
    }

    public function closeAddDoctorModal(){
        $this->addDoctorModal_isOpen = false;
    }

    public function mount($department)
    {
        $this->department = $department;
    }
    public function render()
    {
        return view('livewire.department.add-doctor-model',[
            'doctors' => Doctor::whereNotIn('id', DoctorDepartment::where('department_id', $this->department->id)->pluck('doctor_id'))->get(),
        ]);
    }

    public function addDoctor(){
        $this->validate([
            'doctor_id' => 'required',
        ]);
        DoctorDepartment::create([
            'doctor_id' => $this->doctor_id,
            'department_id' => $this->department->id,
        ]);

        noty()->addSuccess('Added Successfully');

        $this->closeAddDoctorModal();
    }
}
