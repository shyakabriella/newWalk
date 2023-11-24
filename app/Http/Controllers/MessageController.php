<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $message = Message::all();
        
       // dd($message);
        return view('pages.contact',compact('message')) 
            ->with('i', ($request->input('page', 1) - 1) * 5);
            
    }

    public function create()
    {
        $message = Message::all();
        

        return view('pages.contact',compact('message'));
               
    }


}
