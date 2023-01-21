<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Notifications\MyFirstNotification;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class AdminControllrt extends Controller
{
    //
    public function addDoctor(){
        return view('admin.add_doctor');
    }
    public function createDoctor(Request $request){
        $doctor =new Doctor();
        // return $request->file('image');
        
        $image = $request->image;
        $imageName =time() . '.'.$image->getClientoriginalExtension();
        $request->image->move('doctorImage',$imageName);
        $doctor->image = $imageName;
        $doctor->name = $request->name;
        $doctor->room = $request->room;
        $doctor->phone = $request->phone;
        $doctor->specialty = $request->specialty;
        $doctor->save();
        return redirect()->back()->with('message','success Add');
    }
    //show doctors
    public function showDoctors(){
        $doctors =Doctor::all();
        return view('admin.showDoctors',compact('doctors'));
    }



    //edit doctors
    public function editDoctor($id){
        // $doctor =Doctor::where('id',$id)->get();
        $doctor =Doctor::find($id);
        // return $doctor;
        $myApps=Appointment::all();
        return view('admin.editDoctor',compact('doctor'));
    }
    // update docotrs
    public function updateDoctor(Request $request,$id){
        // return $request->file('image');
        $doctor =Doctor::find($id);
        // return $request->file('image');
        if($request->file('image')){
            $image = $request->image;
            $imageName =time() . '.'.$image->getClientoriginalExtension();
            $request->image->move('doctorImage',$imageName);
            $doctor->image = $imageName;

        }
        $doctor->name = $request->name;
        $doctor->room = $request->room;
        $doctor->phone = $request->phone;
        $doctor->specialty = $request->specialty;
        $doctor->save();
        return redirect()->back()->with('message','success Update');
    }
    //delete doctors
    public function deleteDoctors($id){
        $doctors =Doctor::where('id',$id)->delete();
        return redirect()->back();
    }


    public function showAppointments(){
        $myApps=Appointment::all();
        return view('admin.appointments',compact('myApps'));
    }
    public function cancelAppointments($id){
        $app =Appointment::find($id);
        $app->state ='cuncled';
        $app->save();
        return redirect()->back();
    }
    public function approvedAppointments($id){
        $app =Appointment::find($id);
        $app->state ='approved';
        $app->save();
        return redirect()->back();return redirect()->back();
    }
    public function pendingAppointments($id){
        $app =Appointment::find($id);
        $app->state ='pending';
        $app->save();
        return redirect()->back();
    }
    public function deleteAppointments($id){
        $app =Appointment::where('id',$id)->delete();  
        return redirect()->back();
    }


    // send notification

    public function viewMessage($id){
        $App =Appointment::find($id);
        return view('admin.viewMessage' ,compact('App'));
    }

    public function sendMessage(Request $request,$id){
        $App =Appointment::find($id);
        $details =[
        'head'=>$request->head,
        'bodyMessage'=>$request->bodyMessage,
        'actionName'=>$request->actionName,
        'actionUrl'=>$request->actionUrl,
        'footer'=>$request->footer,
        ];
        FacadesNotification::send($App,new MyFirstNotification($details));
        return redirect()->back()->with('message','success to send message');
    }
    
}
