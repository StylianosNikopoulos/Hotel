<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;

class HomeController extends Controller
{
    public function room_details($id){
        $room = Room::find($id);
        return view('home.room_details',compact('room'));
    }

    public function add_booking(Request $request,$id){

        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate'
        ]);

        $data = new Booking;
        $data->room_id=$id;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;

        $startDate=$request->startDate;
        $endDate=$request->endDate;
        $isBooked = Booking::where('room_id',$id)
        ->where('checkin','<=',$endDate)
        ->where('checkout','>=',$startDate)->exists();
        if($isBooked){
            $data->save();
            return redirect()->back()->with('message',"Room is already booked at this date");
        }
        else{
            $data->checkin=$request->startDate;
            $data->checkout=$request->endDate;
            $data->save();
            return redirect()->back()->with('message',"Success");
        }
    }


    public function contact(){
        return view('home.contact');
    }

    public function about(){
        return view('home.about');
    }

    public function send_message(Request $request){
        $contact = new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->back()->with('message','sent successfully');
    }
}
