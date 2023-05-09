<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('back.pages.dashboard');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }


    public function password(){
        $password = Hash::make('password');
        dd($password);
    }
}
