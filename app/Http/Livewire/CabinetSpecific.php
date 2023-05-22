<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Response;

class CabinetSpecific extends Component
{
    

    public $record_specs;

    public function mount($record_specs){
        $this->record_specs = $record_specs;
    }


    public function render()
    {
        return view('livewire.cabinet-specific',  ['record_specs' => $this->record_specs]);
    }
}
