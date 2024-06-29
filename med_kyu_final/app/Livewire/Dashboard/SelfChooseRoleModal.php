<?php

namespace App\Livewire\Dashboard;

use App\Models\Buyer;
use App\Models\Farmer;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class SelfChooseRoleModal extends Component
{
    #[Validate('required|in:farmer,buyer', 'Role')]
    public $selectedRole = null;
    public $selfChooseRoleModal_isOpen = true;
    public function render()
    {
        return view('livewire.dashboard.self-choose-role-modal');
    }

    public function mount()
    {
        $user_id = auth()->id();
        if (Farmer::where('user_id', $user_id)->exists()) {
            $this->selectedRole = 'farmer';
            $this->selfChooseRoleModal_isOpen = false;
        } elseif (Buyer::where('user_id', $user_id)->exists()) {
            $this->selectedRole = 'buyer';
            $this->selfChooseRoleModal_isOpen = false;
        }elseif (Auth::user()->hasRole('admin')){
            $this->selfChooseRoleModal_isOpen = false;
        } else {
            $this->selfChooseRoleModal_isOpen = true;
        }
    }

    public function submitRole()
    {
        $this->validate();

        if ($this->selectedRole == 'farmer') {
            $f = Farmer::create([
                'user_id' => auth()->user()->id
            ]);
            noty()->addSuccess('Role selected successfully');
            $this->assignRole('farmer');
            // $this->selfChooseRoleModal_isOpen = false;
        }

        if ($this->selectedRole == 'buyer') {
            Buyer::create([
                'user_id' => auth()->user()->id
            ]);
            noty()->addSuccess('Role selected successfully');
            $this->assignRole('buyer');
            // $this->selfChooseRoleModal_isOpen = false;
        }

        $this->selfChooseRoleModal_isOpen = false;
    }

    protected function assignRole($roleName)
    {
        $role = Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
        Auth::user()->assignRole($role->name);
        noty()->addSuccess($roleName . ' role assigned successfully');
    }
}
