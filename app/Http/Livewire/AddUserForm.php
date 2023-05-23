<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class AddUserForm extends Component
{

    public $fullname, $username, $email, $type, $password, $password_confirmation;


    public function AddAdmin(){
        $this->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email',
            'type' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $password = Hash::make($this->password);
        $user = new User;
        $user->name = $this->fullname;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->type = $this->type;
        $user->password = $password;
        $user->save();
        $this->reset();
        $this->showToastr('Successfully added an Admin.', 'success');
    }

    public function showToastr($message, $type){
        return $this->dispatchBrowserEvent('showToastr', [
            'type' => $type,
            'message' => $message
        ]);
    }

    public function render()
    {
        return view('livewire.add-user-form');
    }
}
