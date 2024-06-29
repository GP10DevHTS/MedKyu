<?php

namespace App\Livewire\Department;

use Livewire\Component;

class DepartmentsList extends Component
{
    public function render()
    {
        abort_if(!auth()->user()->canany(['view-departments','create-departments']),403);

        return view('livewire.department.departments-list');
    }
}
