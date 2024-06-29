<?php

namespace App\Livewire\Users;

use App\Models\Buyer;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class BuyersIndex extends Component
{
    use WithPagination;

    public $selectedbuyers = [];
    // public $selectAll = false;
    #[Url()]
    public $perPage = 50;
    public $action;
    public function render()
    {
        return view('livewire.users.buyers-index',[
            'buyers' => Buyer::paginate($this->perPage),
        ]);
    }
}
