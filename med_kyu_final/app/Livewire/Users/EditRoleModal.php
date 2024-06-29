<?php

namespace App\Livewire\Users;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class EditRoleModal extends Component
{
    public $editRoleModal_isOpen = false;
    public $name;
    public $role;

    public function openEditRoleModal(){
        $this->editRoleModal_isOpen = true;
    }

    public function mount($role){
        $this->role = Role::find($role->id);
        $this->name = $role->name;
    }

    public function closeEditRoleModal(){
        $this->editRoleModal_isOpen = false;
    }

    public function render()
    {
        return view('livewire.users.edit-role-modal');
    }

    public function updateRole(){

        Auth::user()->can('edit-roles') or abort(403, "You don't have permission to update roles");

        $this->validate([
            'name' => 'required|min:3|unique:roles,name|max:25',
        ]) ;

        $role = Role::find($this->role->id);
        $role->name = $this->name;
        $role->save();

        noty()->addSuccess('Role updated');

        $this->closeEditRoleModal();
    }
}
