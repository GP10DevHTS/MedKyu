<?php

namespace App\Livewire\Patients;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Patient;
use Livewire\Component;

class PatientAppointmentTab extends Component
{
    public $patient;
    public $selectedDepartment = '';

    public function mount($patient) {
        $this->patient = Patient::find($patient);
    }

    public function render()
    {
        return view('livewire.patients.patient-appointment-tab',[
            'appointments' => Appointment::withTrashed()->when($this->selectedDepartment != '', function ($query) {
                return $query->where('department_id', $this->selectedDepartment);
            })->where('patient_id', $this->patient->id)
            ->orderBy('deleted_at', 'asc')
            ->orderBy('start_time', 'desc') 
            ->get(),
            'departments' => Department::all(),
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
