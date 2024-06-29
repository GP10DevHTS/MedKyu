<?php

namespace App\Livewire\Facilities;

use Livewire\Component;
use App\Models\Room;
use App\Models\Ward;

class NewRoomModal extends Component
{
    public $name;
    public $ward_id;
    public $capacity;

    public $newRoomModalIsOpen = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'ward_id' => 'required|exists:wards,id',
        'capacity' => 'required|min:1'
    ];

    public function openNewRoomModal()
    {
        $this->newRoomModalIsOpen = true;
    }

    public function mount(){
        $this->capacity = 1;
    }

    public function closeNewRoomModal()
    {
        $this->newRoomModalIsOpen = false;
    }

    public function createRoom()
    {
        $this->validate();

        Room::create([
            'name' => $this->name,
            'ward_id' => $this->ward_id,
            'capacity' => $this->capacity,
        ]);

        $this->dispatch('roomCreated');
        noty()->addSuccess('Room Saved');
        $this->reset(['name', 'ward_id']);
        $this->closeNewRoomModal();
    }

    public function render()
    {
        return view('livewire.facilities.new-room-modal', [
            'wards' => Ward::all(),
        ]);
    }
}
