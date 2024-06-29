<?php

namespace App\Livewire\Appointment;

use App\Models\Appointment;
use App\Models\Availability;
use App\Models\Department;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

use Livewire\Attributes\Validate;

class AppointmentNew extends Component
{
    // #[Validate('required|exists:patients,id')]
    public $patient_id;
    // public $doctor_id;
    // #[Validate('required|date_format:Y-m-d|after_or_equal:today')]
    public $appointment_date;
    // #[Validate('required|date_format:H:i|')]
    public $start_time;
    // #[Validate('sometimes|nullable')]
    public $end_time;

    public $department_id;

    // #[Validate('sometimes|nullable')]
    public $phone;
    // #[Validate('sometimes|nullable')]
    public $date_of_birth;

    // public $status;
    public $reason;
    // public $cancel_reason;

    // New patient fields
    public $new_patient = false;
    // #[Validate('required')]
    public $patient_name;
    // #[Validate('required|email')]
    public $patient_email;

    public $appointment_slot;
    public $useNewpatient;
    public $bookAppointmentModal_isOpen = false;
    public $canMakeForOthers = true;

    protected $rules = [
        'patient_id' => 'required|exists:patients,id',
        'appointment_date' => 'required|date_format:Y-m-d|after_or_equal:today',
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'sometimes|nullable|date_format:H:i|after:start_time',
        'phone' => 'sometimes|nullable|string',
        'date_of_birth' => 'sometimes|nullable|date_format:Y-m-d',
        'reason' => 'sometimes|nullable|string',
        'patient_name' => 'required_if:new_patient,true|string|max:255',
        'patient_email' => 'required_if:new_patient,true|email|unique:users,email',
        'department_id' => 'required|exists:departments,id',
    ];

    public function mount(){
        if(auth()->user()->patient){
            $this->patient_id = auth()->user()->patient->id;
            $this->canMakeForOthers = false;
        }
    }
    public function bookAppointment(){
        $this->bookAppointmentModal_isOpen = true;
    }
    public function render()
    {
        abort_if(!auth()->user()->can('create-appointment'),403);

        return view('livewire.appointment.appointment-new',[
            'departments' => Department::all(),
            'patients' => Patient::all(),
        ]);
    }

    public function createAppointment()
    {
        if ($this->new_patient) {
            $this->validate([
                'patient_name' => 'required|string|max:255',
                'patient_email' => 'required|email|unique:users,email',
                'phone' => 'sometimes|nullable|string',
                'date_of_birth' => 'sometimes|nullable|date_format:Y-m-d',
            ]);

            $password = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 8)), 0, 8);

            $user = User::create([
                'name' => $this->patient_name,
                'email' => $this->patient_email,
                'password' => Hash::make($password),
                'phone' => $this->phone ?? null,
                'dob' => $this->date_of_birth ?? null,
            ]);

            $patient = Patient::create([
                'user_id' => $user->id,
            ]);

            $this->patient_id = $patient->id;
        } else {
            $this->validate(['patient_id' => 'required|exists:patients,id']);
        }

        $this->validate([
            'appointment_date' => 'required|date_format:Y-m-d|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'sometimes|nullable|date_format:H:i|after:start_time',
            'reason' => 'sometimes|nullable|string',
            'department_id' => 'required|exists:departments,id',
        ]);

        $startDateTime = Carbon::createFromFormat('Y-m-d H:i', $this->appointment_date . ' ' . $this->start_time);
        // $endDateTime = $this->end_time ? Carbon::createFromFormat('Y-m-d H:i', $this->appointment_date . ' ' . $this->end_time) : null;


        Appointment::create([
            'patient_id' => $this->patient_id,
            'department_id' => $this->department_id,
            // 'appointment_date' => $this->appointment_date,
            'start_time' => $startDateTime,
            // 'end_time' => $this->end_time ?? null,
            // 'status' => 'pending', // Assuming a default status
            'reason' => $this->reason,
        ]);

        noty()->addSuccess('Appointment successfully created.');

        $this->reset();
        $this->bookAppointmentModal_isOpen = false;
    }
}
