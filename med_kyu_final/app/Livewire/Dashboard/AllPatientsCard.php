<?php

namespace App\Livewire\Dashboard;

use App\Models\Patient;
use Livewire\Component;

class AllPatientsCard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.all-patients-card',[
            'count' => Patient::all()->count(),
        ]);
    }
}
