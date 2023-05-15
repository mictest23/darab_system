<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Record;
use Livewire\Component;

class AddRecordForm extends Component
{

    use WithFileUploads;
    public $docket_number, $date_filed, $cabinet, $nature, $petitioners, $lessor, $lessee, $location, $date_alhc, $area, $crops, $counsel, $file;

    public function AddRecord(){
        $this->validate([
            'docket_number' => 'required|unique:records,docket_number',
            'date_filed' => 'required',
            'cabinet' => 'required',
            'nature' => 'required',
            'petitioners' => 'required',
            'lessor' => 'required',
            'lessee' => 'required',
            'location' => 'required',
            'date_alhc' => 'required',
            'area' => 'required',
            'crops' => 'required',
            'counsel' => 'required',
            'file' => 'required',
        ]);


        $recordModel = new Record;
        if($this->file) {
            $fileName = time().'_'.$this->file->getClientOriginalName();
            $filePath = $this->file->storeAs('files', $fileName, 'public');
            $recordModel->name = time().'_'.$this->file->getClientOriginalName();
            $recordModel->file_path = '/public/' . $filePath;

            $recordModel->docket_number = $this->docket_number;
            $recordModel->date_filed = $this->date_filed;
            $recordModel->cabinet = $this->cabinet;
            $recordModel->nature = $this->nature;
            $recordModel->petitioners = $this->petitioners;
            $recordModel->lessor = $this->lessor;
            $recordModel->lessee = $this->lessee;
            $recordModel->location = $this->location;
            $recordModel->date_alhc = $this->date_alhc;
            $recordModel->area = $this->area;
            $recordModel->crops = $this->crops;
            $recordModel->counsel = $this->counsel;
            $recordModel->save();

            $this->reset();
            $this->showToastr('Successfully added to database.', 'success');
        }
        
    }


    public function showToastr($message, $type){
        return $this->dispatchBrowserEvent('showToastr', [
            'type' => $type,
            'message' => $message
        ]);
    }


    public function render()
    {
        return view('livewire.add-record-form');
    }
}
