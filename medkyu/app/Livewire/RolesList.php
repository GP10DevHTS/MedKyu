<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesList extends Component
{
    public function render()
    {   
        $roles = Role::with('permissions')->get();
        
        $allPermissions = Permission::all();
        
        // Get permissions that the role doesn't have
        $roles->each(function ($role) use ($allPermissions) {
            $role->missingPermissions = $allPermissions->diff($role->permissions);
        });
        return view('livewire.roles-list',[
            'roles'=>$roles,
            'allPermissions'=>$allPermissions,
        ])
        // ->extends('layouts.main_comps.userManagement')
        ;
    }
}
