<?php

namespace App\Livewire\Appointment;

use App\Models\Appointment;
use App\Models\Department;
use Livewire\Component;


class AppointmentIndex extends Component
{
    public $selectedDepartment = '';

    public function render()
    {
        abort_if(!auth()->user()->can('view-appointments'),403);

        return view('livewire.appointment.appointment-index',[
            'departments' => Department::all(),
            'appointments' =>  Appointment::when($this->selectedDepartment != '', function ($query) {
                return $query->where('department_id', $this->selectedDepartment);
            })->get(),
       
        ]);
    }

    public function assignSelf($appointment_id){
        Appointment::where('id',$appointment_id)->update(['doctor_id' => auth()->user()->doctor->id,'status'=>1]);
        noty()->addSuccess('Appointment assigned');
    }

    public function completeAppointment($appointment_id){
        Appointment::where('id',$appointment_id)->update(['status' => 3, 'deleted_at' => now()]);
        noty()->addSuccess('Saved as Complete');
    }
}
