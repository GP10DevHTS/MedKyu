<?php

namespace App\Livewire\Appointment;

use App\Models\DoctorDepartment;
use Livewire\Component;

class AssignDoctor extends Component
{
    public $appointment;
    public $doctor_id;
    public $assignDoctorModal_isOpen = false;
    // public $doctors;

    public function openAssignDoctorModal(){
        $this->assignDoctorModal_isOpen = true;
    }

    public function closeAssignDoctorModal(){
        $this->assignDoctorModal_isOpen = false;
    }

    public function mount($appointment){
        $this->appointment = $appointment;
        // $this->doctors = DoctorDepartment::where('department_id',$this->appointment->department_id)->get();

        
    }
    public function render()
    {
        return view('livewire.appointment.assign-doctor',[
            'doctors' => DoctorDepartment::where('department_id',$this->appointment->department_id)->get()
        ]);
    }

    public function assignDoctor(){
        $this->appointment->doctor_id = $this->doctor_id;
        $this->appointment->status = 1;
        $this->appointment->save();
        noty()->addSuccess('Doctor assigned');
        $this->closeAssignDoctorModal();
    }
}
