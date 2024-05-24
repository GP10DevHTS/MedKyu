<?php

namespace App\Livewire;

use App\Models\EmergencyContact;
use Livewire\Component;
use App\Models\User;


class AdminEditEmergencyContact extends Component
{
    public $student;
    public $student_id;
    public $address;
    public $relationship;
    public $contact_name;
    public $contact_number;
    public $contact_email;
    public function mount($id){
        $this->student = User::findOrFail($id);
    }
    public function update(){
        $studentId = $this->student->id;
        $this->validate([
            // 'student_id' => 'required',
            'relationship' => 'required',
            'address' => 'required',
            'contact_name' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required|email',
        ]);
        // dd($studentId);
        $emergency = EmergencyContact::updateOrCreate(['student_id' => $studentId],[
            'relationship' => $this->relationship,
            'address' => $this->address,
            'contact_name' => $this->contact_name,
            'contact_number' => $this->contact_number,
            'contact_email' => $this->contact_email,
        ]);


        $this->dispatch('alert' , [
            'title' => 'success',
            'message' => 'Emergency Contact has been updated.',
            'icon' => 'success'
        ]);


        
    }
    public function render()
    {
        return view('livewire.admin-edit-emergency-contact');
    }
}
