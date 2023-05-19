<?php

namespace App\Http\Livewire;

use App\Models\Record;
use App\Models\Cabinet;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CabinetShow extends Component
{

    public function render(){
        $cabinet = Cabinet::all();
        return view('livewire.cabinet-show', ['cabinet' => $cabinet]);
    }

    public function viewSpecific($number, $test, $id){

        $cab_specific = 'cab '.$number.'-'.$test.'';
        return redirect()->route('cabinet_specific', $cab_specific);
    }
}
