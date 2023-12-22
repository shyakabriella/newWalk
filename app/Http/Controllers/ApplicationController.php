<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
      /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  function __construct()

    //  {
    //       $this->middleware('permission:event-list|event-create|event-edit|event-delete', ['only' => ['index','show']]);
    //       $this->middleware('permission:event-create', ['only' => ['create','store']]);
    //       $this->middleware('permission:event-edit', ['only' => ['edit','update']]);
    //       $this->middleware('permission:event-delete', ['only' => ['destroy']]);
    //  }
 
     /**
 
      * Display a listing of the resource.
 
      *
 
      * @return \Illuminate\Http\Response
 
      */
 
      public function index()
      {
          $apply = Application::latest()->paginate(5);
          return view('application.index', compact('apply'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
      }
      
     /**
 
      * Show the form for creating a new resource.
 
      *
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function create()
 
     {
         return view('pages.index');
     }
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
 
     public function store(Request $request)
 
     {
         request()->validate([
             'name' => 'required',
             'nid' => 'required',
             'phone' => 'required',
             'gender' => 'required',
             'province' => 'required',
             'district' => 'required',
             'sector' => 'required',
             'desease' => 'required',
             'village' => 'required',
             'ubudehe' => 'required',
             'asset' => 'required',
             'education' => 'required',
             'disability' => 'required',
         ]);
         Application::create($request->all());
         return redirect()->route('/')
                         ->with('success','Event created successfully.');
     }
     /**
 
      * Display the specified resource.
 
      *
      * @param  \App\Event  $product
      * @return \Illuminate\Http\Response
      */
     public function show(Event $event)
 
     {
         return view('events.show',compact('event'));
     }
     /**
 
      * Show the form for editing the specified resource.
 
      *
 
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
      */
     public function edit(Event $event)
 
     {
         return view('events.edit',compact('events'));
     }
     /**
 
      * Update the specified resource in storage.
 
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Event $event)
 
     {
          request()->validate([
             'name' => 'required',
             'detail' => 'required',
         ]);
 
         $events->update($request->all());
         return redirect()->route('events.index')
                       ->with('success','events updated successfully');
     }
 
     /**
 
      * Remove the specified resource from storage.
      *
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
      */
 
     public function destroy(Event $event)
 
     {
         $event->delete();
         return redirect()->route('events.index')
                         ->with('success','Events deleted successfully');
     }
}
