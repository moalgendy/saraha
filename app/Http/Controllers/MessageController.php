<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function send($id)
    {
        $user = User::findOrfail($id);
        
        $message = Visit::where('user_id' ,Auth::id())->count();

        if($user->id != Auth::id()){
                Visit::create(['user_id'=>$id]);
                
            
        }
        


        return view('send' , compact('user'));
    }


    public function store(Request $request , $id)
    {
        $request->validate([
            'text'=>'required'
        ]);
        
        // store message in db
        Message::create([
            'text'=>$request->text,
            'user_id'=>$id
        ]);

        // redirect to any route i want
        return redirect()->route('login')->with('success','message has been sent successfully');
    }



    public function index()
    {
        // $messages = Message::where('user_id', Auth::id())->latest()->paginate(10);
        $visits = Visit::where('user_id' ,Auth::id())->count();
        // $message = Message::where('user_id' ,Auth::id())->count();
        // dd(request()->all());
        return view('send', compact( 'visits' ));
    }
}
