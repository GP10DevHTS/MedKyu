<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EditRoleModal extends Component
{
    public $role;
    public $allPermissions;
    public $isModalOpen = false;
    public function mount(Role $role)
    {
        $this->role = Role::with('permissions')->find($role->id);

        $this->allPermissions = Permission::all();
        
    }

    public function togglePermission($permissionId)
    {
        $permission = Permission::find($permissionId);

        if ($this->role->hasPermissionTo($permission)) {
            $this->role->revokePermissionTo($permission);
        } else {
            $this->role->givePermissionTo($permission);
        }

        $this->role->load('permissions');
    }
    public function render()
    {

        return view('livewire.edit-role-modal');
    }
    
    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function openModal(Role $role)
    {
        // $this->role = $role;
        $this->isModalOpen = true;
    }

    public function revokeAll($roleId)
    {
        $role = Role::find($roleId);
        $role->revokePermissionTo($role->permissions);

        $this->role->load('permissions');
    }

    public function grantAll($roleId)
    {
        // dd($roleId);
        // return;
        $role = Role::find($roleId);
        $permissions = Permission::all();
        
        foreach ($permissions as $permission) {
            $role->givePermissionTo($permission);
        }

        $this->role->load('permissions');
    }
}
