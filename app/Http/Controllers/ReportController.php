<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Requirement;
use App\Exports\ReportExport;
use PDF;
use Excel;

class ReportController extends Controller
{
      /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()

     {
          $this->middleware('permission:requirements-list|requirements-create|requirements-edit|requirements-delete', ['only' => ['index','show']]);
          $this->middleware('permission:requirements-create', ['only' => ['create','store']]);
          $this->middleware('permission:requirements-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:requirements-delete', ['only' => ['destroy']]);
     }
 
     /**
 
      * Display a listing of the resource.
 
      *
 
      * @return \Illuminate\Http\Response
 
      */
     public function index()
     {
        $requirements = Requirement::get();
         $apply = Application::latest()->paginate(5);
       // dd($apply);
         return view('report.index',compact('apply'))
             ->with('i', (request()->input('page', 1) - 1) * 5)
             ->with("apply",$apply);
             
     }

     public function generatePdf()
    {
        $data = [
            'apply' => Application::all(),
        ];

        $pdf = PDF::loadView('report.pdf', $data);

        return $pdf->download('report.pdf');
    }

    public function generateExcel()
    {
        $data = [
            'apply' => Application::all(),
        ];

        return Excel::download(new ReportExport($data), 'report.xlsx');
    }
  
}
