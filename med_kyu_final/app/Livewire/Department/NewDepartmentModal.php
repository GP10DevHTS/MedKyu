<?php

namespace App\Livewire\Department;

use Livewire\Component;
use App\Models\Department;  

class NewDepartmentModal extends Component
{
    public $newDepartmentModal_isOpen = false;
    public $department_name;
    public $department_description;

    public function newDepartmentModal(){
        $this->newDepartmentModal_isOpen = true;
    }
    public function createDepartment(){
        $validatedData = $this->validate([
            'department_name' => 'required',
            'department_description' => 'required',
        ]);
        // dd($validatedData);

        Department::create([
            'department_name' => $validatedData['department_name'],
            'department_description' => $validatedData['department_description'],
        ]);
        noty()->addSuccess('Department created successfully');
        $this->reset(['department_name','department_description']);
        $this->newDepartmentModal_isOpen = false;
    }
    public function render()
    {
        return view('livewire.department.new-department-modal');
    }
}
