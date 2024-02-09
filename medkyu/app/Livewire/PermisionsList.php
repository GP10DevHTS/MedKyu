<?php

namespace App\Livewire;

use Livewire\Component;
// use Spatie\Permission\Models\Permission;

class PermisionsList extends Component
{
    public function render()
    {
        // $permissions = Permission::all(); 
        return view('livewire.permisions-list',[
            // 'permissions'=>$permissions,
        ]);
    }
}
