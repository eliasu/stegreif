<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FilterV1 extends Component
{

    public $filter = "";

    public function render()
    {
        return view('livewire.filter-v1');
    }
}
