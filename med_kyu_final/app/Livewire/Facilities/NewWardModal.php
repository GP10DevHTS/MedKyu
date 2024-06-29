<?php

namespace App\Livewire\Facilities;

use Livewire\Component;
use App\Models\Ward;
use Illuminate\Validation\Rule;

class NewWardModal extends Component
{
    public $name;
    public $type;

    public $newWardModalIsOpen = false;

    public function openNewWardModel(){
        $this->newWardModalIsOpen = true;
    }

    public function closeNewWardModel(){
        $this->newWardModalIsOpen = false;
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:255',
    ];

    public function createWard()
    {
        $this->validate();

        Ward::create([
            'name' => $this->name,
            'type' => $this->type,
        ]);

        // Emit an event to close the modal and refresh the parent component if needed
        noty()->addSuccess('Ward created');

        // Reset form fields
        $this->reset(['name', 'type']);
    }


    public function render()
    {
        return view('livewire.facilities.new-ward-modal');
    }
}
