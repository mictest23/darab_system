<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Response;

class CabinetSpecific extends Component
{
    

    public $record_specs, $cab_specific;
    public $currenturl;
    

    public function mount($record_specs, $cab_specific){
        $this->record_specs = $record_specs;
        $this->cab_specific = $cab_specific;
        $this->currenturl = url()->full();
    }


    public function render()
    {
        return view('livewire.cabinet-specific',  ['record_specs' => $this->record_specs]);
    }
}
