<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class ViewRoleDetails extends Component
{

    public $role;

    public function mount($roleId)
    {
        $this->role = Role::with('permissions')->find($roleId);

        if (!$this->role) {
            // If the role is not found, you can return an error or redirect
            abort(404, 'Role not found');
        }
    }
    public function render()
    {
        $allPermissions = Permission::all();
        return view('livewire.view-role-details',[
            // 'role'=>$this->role,
            'count'=>User::role($this->role->name)->count(),

            'allPermissions'=>$allPermissions,
        ]);
    }
}
