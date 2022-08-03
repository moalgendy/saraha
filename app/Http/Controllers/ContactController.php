<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        if($this->isOnline()) {
            $mail_data = [
            'recipient'=>'mhmad.teto123@yahoo.com',
            'fromEmail'=>$request->email,
            'fromName'=>$request->name,
            'subject'=>$request->subject,
            'body'=>$request->message,

            ];

            Mail::send('email-template', $mail_data, function ($message) use ($mail_data){
                $message->to($mail_data['recipient']);
                $message->from($mail_data['fromEmail'],$mail_data['fromName']);
                $message->subject($mail_data['subject']);
                
                // $message->cc('john@johndoe.com', 'John Doe');
                // $message->bcc('john@johndoe.com', 'John Doe');
                // $message->replyTo('john@johndoe.com', 'John Doe');
                // $message->subject('Subject');
                // $message->priority(3);
                // $message->attach('pathToFile');
            });

            return redirect()->back()->with('success','Email Sent!');

        }else {
            return redirect()->back()->withInput()->with('error','check your internet connection');
        }
    }

    



    public function isOnline($site = "https://youtube.com/")
    {
        if (@fopen($site,"r")) {
            return true;
        }else {
            return false;
        }
    }
}
