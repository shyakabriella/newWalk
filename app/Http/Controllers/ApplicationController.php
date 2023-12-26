<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Requirement;
use Illuminate\Support\Facades\DB;
use App\Notifications\ApplicationStatusNotification;
class ApplicationController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function index()
    {       
        $apply = Application::latest()->paginate(5);
       //dd($events);
        return view('apply.index',compact('apply'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }


     /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

     
     /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

     public function create()

     {
      
        $requirements = Requirement::get();
         return view('apply.create')
         ->with("requirements",$requirements);
         
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
              'names' => 'required',
              'nid' => 'required',
              'email' => 'required',
              'phone' => 'required',
              'gender' => 'required',
              'Province' => 'required',
              'District' => 'required',
              'Sector' => 'required',
              'event_name' => 'required',
              'place' => 'required',
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

       // ApplicationController.php

public function show($id)
{
    $application = Application::findOrFail($id);
    return view('apply.show', compact('application'));
}


public function approve($id)
{
    $application = Application::findOrFail($id);
    $application->update(['approved' => true, 'rejected' => false]);

    // Send notification
    $application->notify(new ApplicationStatusNotification($application, 'approved'));

    return redirect()->route('applications.index')
                    ->with('success', 'Application approved successfully.');
}

public function reject($id)
{
    $application = Application::findOrFail($id);

    // Update the status
    $application->update(['approved' => false, 'rejected' => true]);

    // Send notification
    $application->notify(new ApplicationStatusNotification($application, 'rejected'));

    // Delete the record
    $application->delete();

    return redirect()->route('applications.index')
                    ->with('success', 'Application rejected and removed successfully.');
}




}
