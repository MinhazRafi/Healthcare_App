<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AppointmentController;


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

// Client

Route::get('/client/login',[ClientController::class,"clientLogin"])->name("clientLogin");
Route::post('/client/login',[ClientController::class,"clientLoginSubmitted"])->name("clientLogin");

Route::get('/client/registration',[ClientController::class,"clientRegistration"])->name("clientRegistration");
Route::post('/client/registration',[ClientController::class,"clientRegistrationSubmitted"])->name("clientRegistration");

Route::get('/client/home',[ClientController::class,"home"])->name("home")->middleware('ValidClient');

Route::get('/logout',function()
{
    session()->flush();
    session()->flash('msg','Sucessfully Logged out');
    return redirect()->route('clientLogin');
                            })->name('logout');

Route::get('/client/profile',[ClientController::class,"clientProfile"])->name("clientProfile")->middleware('ValidClient');
Route::post('/client/profile',[ClientController::class,"clientProfileUpdated"])->name("clientProfile")->middleware('ValidClient');

Route::get('/doctors',[ClientController::class,"doctorList"])->name("doctorList")->middleware('ValidClient');

Route::get('/client/appointment/{id}',[ClientController::class,"appointment"])->name("appointment")->middleware('ValidClient');
Route::post('/client/appointment',[ClientController::class,"appointmentted"])->name("appointment")->middleware('ValidClient');

Route::get('/client/home/{id}',[ClientController::class,"deleteAppointment"])->name("deleteAppointment");




