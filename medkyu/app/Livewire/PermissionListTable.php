<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
class PermissionListTable extends Component
{
    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.permission-list-table',
        [
            'permissions'=>$permissions,
        ]);
    }
}
