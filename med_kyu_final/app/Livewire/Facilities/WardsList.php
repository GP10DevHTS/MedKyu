<?php

namespace App\Livewire\Facilities;

use App\Models\Ward;
use Livewire\Component;

class WardsList extends Component
{
    public function render()
    {
        return view('livewire.facilities.wards-list', [
            'wards' =>  Ward::all(),
        ]);
    }
}
