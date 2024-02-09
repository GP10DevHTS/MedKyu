<?php

namespace App\Livewire;

use Livewire\Component;

class PermissionListTableRecord extends Component
{
    public $permission;

    public function mount($permission){
        $this->permission = $permission;    
    }
    public function render()
    {
        return view('livewire.permission-list-table-record');
    }
}
