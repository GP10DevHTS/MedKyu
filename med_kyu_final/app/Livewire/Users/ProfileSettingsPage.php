<?php

namespace App\Livewire\Users;

use App\Models\Appointment;
use App\Models\Availability;
use App\Models\Doctor;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class ProfileSettingsPage extends Component
{
    public $user;
    public $available_date;
    public $available_time;
    public $doctor_id;

    public $selectedRoles = [];

    public function mount($user)
    {
        $this->user = User::find($user);
    }

    public function render()
    {
        return view(
            'livewire.users.profile-settings-page',
            [
                'roles' => Role::all(),
            ]
        );
    }

    public function updateUserRoles()
    {
        try {
            // Find the user
            $user = User::find($this->user->id);
            $roles = Role::whereIn('id', $this->selectedRoles)->get();
            $user->assignRole($roles);

            noty()->addSuccess('User roles updated successfully.');
        } catch (\Exception $e) {
            // noty()->addError($e->getMessage());
            noty()->addError('Failed to update user roles. Please try again.');
        }
    }

    public function removeRole($roleId)
    {
        try {
            $role = Role::find($roleId);
            $this->user->removeRole($role);
            noty()->addSuccess('Role removed successfully');
        } catch (\Exception $e) {
            noty()->addError($e->getMessage());
        }
    }
    public function createAvailability(){
        $doctor_id = Doctor::where('user_id', $this->user->id)->first()->id;
        $validatedData = $this->validate([
            'available_date' => 'required ',
            'available_time' => 'required ',
        ]);

        $appoint = Availability::create([
            'doctor_id' => $doctor_id,
            'available_date' => $validatedData['available_date'],
            'available_time' => $validatedData['available_time'],
        ]);
        noty()->addSuccess('Appointment created successfully');
    }
}
