<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use App\Mail\subjectMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessageContact extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        // dd($request->all());
        try {
            $msgMail = [
                'name'=> $request->name,
                'email'=> $request->email,
                'subject'=> $request->subject,
                'msg'=> $request->msg,
            ];
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MessageMail($msgMail));

            return redirect()->back()->with('success','Email Send Successfully');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something is wrong');
        }
    }


    public function home()
    {
        return view('home');
    }

    public function subjectMail(Request $request)
    {
        // dd($request->all());
        try {
            $subjectData = [
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'course'=>$request->course,
            ];
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new subjectMail($subjectData));

            return redirect()->back()->with('success','Email Send Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }







}
