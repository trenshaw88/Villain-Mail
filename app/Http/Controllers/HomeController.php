<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = \App\Message::where(
            'recipient_id', '=', \Auth::user()->id)
        ->get();
        return view('home', compact('messages'));
        // $messages = \App\Message::all();
        // return view('home', compact('messages'));
    }

     public function sent()
    {
        $messages = \App\Message::where(
            'sender_id', '=', \Auth::user()->id)
        ->get();
        return view('sent', compact('messages'));
    }

         public function message($id)
    { 
        $messages = \App\Message::find($id);
        return view('message', compact('messages'));
    }


}
