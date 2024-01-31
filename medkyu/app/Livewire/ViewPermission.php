<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class ViewPermission extends Component
{
    public $permissionId;
    public $newPermissionName;
    public $isModalOpen = false;

    public function mount($permissionId)
    {
        $this->permissionId = $permissionId;
        $this->newPermissionName = Permission::find($permissionId)->name;
    }

    public function render()
    {
        return view('livewire.view-permission');
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function updatePermission()
    {
        $this->validate([
            'newPermissionName' => 'required|unique:permissions,name,' . $this->permissionId,
        ]);

        $permission = Permission::find($this->permissionId);
        $permission->name = $this->newPermissionName;
        $permission->save();

        session()->flash('success', 'Permission updated successfully.');

        $this->closeModal();
    }
}
