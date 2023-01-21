<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //

    public function redirect()
    {
        if(Auth::id()){

            if(Auth::user()->usertype == 0){
                $doctors = Doctor::all();
                return view('user.home',compact('doctors')); 
            }else{
                $myApps=Appointment::all();
                return view('admin.home',compact('myApps'));
            }
        }else{
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        $doctors = Doctor::all();
        return view('user.home',compact('doctors'));
    }
    public function appointment(Request $request){
        
        $app =new Appointment();
        $app->name =$request->name;
        $app->email =$request->email;
        $app->message = $request->message;
        $app->date =$request->date;
        $app->state ='pending';
        $app->doctor_id =$request->doctor_id;
        if(Auth::id()){
            $app->user_id =Auth::user()->id;
        }
        $app->save();
        return redirect()->back()->with('message','add appointment success we are call you soon');
    }

    public function show(){
        // return Auth::id();
        // return Auth::user();
        // $op =Appointment::all();
        // return $op;

        // $op = Appointment::select(['name', 'email'])
        // ->withCount('doctor')
        // ->get();
        $op =Appointment::with(['doctor','user'])->get();

        // $doctors =Doctor::with('appointments')

        return $op;

    }

    public function myAppointments(){
        if(Auth::id()){
            $doctors = Doctor::all();
            $user =auth::user()->id;
            $myApps =Appointment::where('user_id',$user)->get(); 
            return view('user.myAppointments',compact('myApps','doctors'));
            
        }else{
            return redirect()->back();
        }
    }

    public function deleteAppointment($id){
        if(Auth::id()){
            $myApps =Appointment::where('id',$id)->delete(); 
            
            return redirect()->back();
            
        }else{
            return redirect()->back();
        }
    }




}
