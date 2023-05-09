<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/test', [AdminController::class, 'password']);


Route::middleware(['guest:web'])->group(function(){
    Route::view('/login', 'back.pages.login')->name('login');
});

Route::middleware(['auth:web'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::view('/add', 'back.pages.add')->name('add');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    
});