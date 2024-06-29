<?php

namespace App\Livewire\Users;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesList extends Component
{
    public function render()
    {
        return view('livewire.users.roles-list', [
            'roles' => Role::all(),
            'permissions' => Permission::all()
        ]);
    }

    public function mount()
    {
        Auth::user()->can('view-roles') or abort(403, 'You are not authorized to view roles');
    }

    public function togglePermission($roleId, $permissionId)
    {
        $role = Role::findOrFail($roleId);
        $permission = Permission::findOrFail($permissionId);

        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);

            noty()->addSuccess('Permission revoked successfully');
        } else {
            $role->givePermissionTo($permission);

            noty()->addSuccess('Permission granted successfully');
        }

        $role->load('permissions');
    }

    public function deleteRole($roleId)
    {
        Auth::user()->can('delete-roles') or abort(403, 'You are not authorized to delete roles');
        $role = Role::findOrFail($roleId);
        $role->delete();

        noty()->addSuccess('Role deleted successfully');
    }
}
