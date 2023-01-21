<?php

use App\Http\Controllers\AdminControllrt;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
 


Route::get('/home',[HomeController::class,'redirect'])->name('home')->middleware(['auth','verified']);

Route::get('/',[HomeController::class,'index']);
Route::post('/appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('/deleteAppointment/{id}',[HomeController::class,'deleteAppointment'])->name('delete.appointment');
Route::get('/myAppointment',[HomeController::class,'myAppointments'])->name('myAppointment');
Route::get('/show',[HomeController::class,'show'])->name('show');




Route::get('/add_doctor',[AdminControllrt::class,'addDoctor'])->name('addDoctor');
Route::get('/showAppointments',[AdminControllrt::class,'showAppointments'])->name('showAppointments');
Route::get('/cancelAppointments/{id}',[AdminControllrt::class,'cancelAppointments'])->name('cancelAppointments');
Route::get('/approvedAppointments/{id}',[AdminControllrt::class,'approvedAppointments'])->name('approvedAppointments');
Route::get('/pendingAppointments/{id}',[AdminControllrt::class,'pendingAppointments'])->name('pendingAppointments');
Route::get('/deleteAppointments/{id}',[AdminControllrt::class,'deleteAppointments'])->name('deleteAppointments');
// doctors

Route::post('/createDoctor',[AdminControllrt::class,'createDoctor'])->name('create.doctor');
Route::get('/showDoctors',[AdminControllrt::class,'showDoctors'])->name('showDoctors');
Route::post('/updateDoctor/{id}',[AdminControllrt::class,'updateDoctor'])->name('updateDoctor');

// notifications
Route::get('/viewMessage/{id}',[AdminControllrt::class,'viewMessage'])->name('viewMessage');
Route::post('/sendMessage/{id}',[AdminControllrt::class,'sendMessage'])->name('sendMessage');











Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
