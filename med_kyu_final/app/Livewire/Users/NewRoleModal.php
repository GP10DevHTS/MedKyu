<?php

namespace App\Livewire\Users;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class NewRoleModal extends Component
{
    public $newRoleModal_isOpen = false;

    #[Validate('required|min:3|unique:roles,name|max:25')]
    public $name;

    public function render()
    {
        return view('livewire.users.new-role-modal');
    }

    public function openNewRoleModal()
    {
        $this->newRoleModal_isOpen = true;
    }

    public function closeNewRoleModal()
    {
        $this->newRoleModal_isOpen = false;
    }

    public function createRole()
    {
        Auth::user()->can('create-roles') or abort(403);
        $this->validate();

        Role::create(['name' => $this->name, 'guard_name' => 'web']);

        noty()->addSuccess('Role created successfully');

        $this->reset();
    }
}
