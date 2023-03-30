<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Visit;
use App\Models\Visit_num;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messages = Message::where('user_id', Auth::id())->latest()->paginate(10);
        $visits = Visit::where('user_id', Auth::id())->latest()->paginate(10);
        $visit = Visit::where('user_id' ,Auth::id())->count();
        $message = Message::where('user_id' ,Auth::id())->count();
        return view('home', compact('messages' , 'message','visits','visit'));
    }


    

    // public function LastTenVisitsData()
    // {
    //     $visits = Visit_num::where('user_id' ,Auth::id())->latest()->take(10)->get();
    //     $visit_num = Visit::where('user_id' ,Auth::id())->count();
    //     return view('last_ten_visits_date' , compact('visits','visit_num'));
        
    // }










    





}
