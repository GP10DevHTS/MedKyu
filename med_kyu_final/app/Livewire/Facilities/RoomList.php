<?php

namespace App\Livewire\Facilities;

use Livewire\Component;
use App\Models\Room;

class RoomList extends Component
{

    public $searchTerm = '';
    
    public function render()
    {
        $rooms = Room::when($this->searchTerm, function ($query) {
                return $query->where('name', 'like', '%' . $this->searchTerm . '%');
            })
            ->get();

        return view('livewire.facilities.room-list', ['rooms' => $rooms]);
    }
}
