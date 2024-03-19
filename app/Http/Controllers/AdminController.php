<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use App\Models\Room;
class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return view('home.index');
            }
        }
        return redirect()->route('login');
    }

    public function home(){
        return view('home.index');
    }

    public function create_room(){
        return view('admin.create_room');
    }

    public function add_room(Request $request){
        $data = new Room();
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->free_coffee = $request->free_coffee;
        $data->room_type = $request->room_type;
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back();


    }
}