<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;  
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
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $this->role->load('permissions');
        return view('livewire.edit-role-modal',[
            // 'allPermissions' => $this->allPermissions,
            // 'role' => $this->role
        ]);
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

    public function revokeAllPerms($roleId)
    {
        $role = Role::find($roleId);
        // dd($role->id, $roleId);
        DB::delete('delete from role_has_permissions where role_id = ?', [$role->id]);
        $this->role->load('permissions');
        $this->closeModal();
        $this->dispatch('alert' , [
            'title' => 'success',
            'message' => 'All permissions revoked successfully.',
            'icon' => 'success'
        ]);
    }

    public function grantAllPerms($roleId)
    {
        $role = Role::find($roleId);
        $role->syncPermissions(Permission::all());
        $this->role->load('permissions');
        $this->closeModal();
        $this->dispatch('alert' , [
            'title' => 'success',
            'message' => 'All permissions granted successfully.',
            'icon' => 'success'
        ]);
    }

   
}
