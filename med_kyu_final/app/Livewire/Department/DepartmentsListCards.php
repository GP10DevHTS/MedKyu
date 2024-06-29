<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;

class DepartmentsListCards extends Component
{
    public function render()
    {
        abort_if(!auth()->user()->can('view-departments'),403);
        return view('livewire.department.departments-list-cards',[
            'departments' => Department::all()
        ]);
    }
}
