<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ToastrController;

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
    Route::get('/more/{record}', [AdminController::class, 'more'])->name('more');
    Route::view('/add', 'back.pages.add')->name('add');
    Route::view('/view', 'back.pages.view')->name('view');
    Route::view('/cabinet_add', 'back.pages.cabinet_add')->name('cabinet_add');
    Route::get('/cabinet_specific/{cab_specific}', [AdminController::class, 'cab_spec'])->name('cabinet_specific');
    Route::view('/cabinet', 'back.pages.cabinet')->name('cabinet');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});