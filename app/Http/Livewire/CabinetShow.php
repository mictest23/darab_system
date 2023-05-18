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
        $record = DB::table('records')->where('cabinet', $cab_specific)->get();
        dd($record);

        return redirect()->route('cabinet_specific');
    }
}
