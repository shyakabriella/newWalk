<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSectionOne;
use App\Models\HomeSectionTwo;
use App\Models\HomeSectionThree;
use App\Models\HomeSectionFour;
use App\Models\HomeSectionFive;
use App\Models\HomeSectionSix;
use App\Models\HealthCenter;
use App\Models\Document;
use App\Models\Patient;
use App\Models\Sample;
use App\Models\SampleStatus;
use Spatie\Permission\Models\Role;
use App\Models\User;
use DB;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $section_one = HomeSectionOne::orderBy('id', 'DESC')->first();
        $section_two = HomeSectionTwo::orderBy('id', 'DESC')->first();
        $section_three = HomeSectionThree::orderBy('id', 'DESC')->first();
        $section_four = HomeSectionFour::orderBy('id', 'DESC')->first();
        $section_five = HomeSectionFive::orderBy('id', 'DESC')->first();
        $section_six = HomeSectionSix::orderBy('id', 'DESC')->first();
        $health = HealthCenter::all();
        $health = HealthCenter::where('id','$id')->get();
          //dd($health);
        return view('pages.index', [
            'section_one' => $section_one, 
            'section_two' => $section_two, 
            'section_three' => $section_three,
            'section_four' => $section_four,
            'section_five' => $section_five,
            'section_six' => $section_six,
            'health' =>$health
        ]);       
    }

    public function help(Request $request)
    {   
        return view('pages.help', [            
        ]);            
    }

    public function about(Request $request)
    {   
        return view('pages.about', [            
        ]);            
    }

    public function contact(Request $request)
    {   
        return view('pages.contact', [            
        ]);            
    }

    public function policy(Request $request)
    {   
        return view('pages.policy', [            
        ]);            
    }

    public function viewPDF()
    {
        $users = User::all();

        $pdf = PDF::loadView('pdf.usersdetails', array('users' =>  $users))
        ->setPaper('a4', 'portrait');

        return $pdf->stream();

    }

    public function downloadPDF()
    {
        $users = User::all();

        $pdf = PDF::loadView('pdf.usersdetails', array('users' =>  $users))
        ->setPaper('a4', 'portrait');

        return $pdf->download('users-details.pdf');   
    }

     // Generate PDF
     public function createPDF() {
        // retreive all records from db
        $data = Employee::all();
        // share data to view
        view()->share('pages.report',$health);
        $pdf = PDF::loadView('pdf_view', $health);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }

    public function report(Request $request)
    {   
        $health = HealthCenter::all();
        return view('pages.report', [  
            'health' => $health          
        ]);            
    }

    public function sample(Request $request)
    {   
        $status = SampleStatus::all();
        $samples = Sample::all();
        return view('pages.sample', [  
            'samples' =>$samples         
        ]);            
    }

    public function document(Request $request)
    {   
        $documents = Document::latest()->paginate(5);
        //$documents = Document::where('category', '=', 'policy');
        return view('pages.document', [  
            'documents' =>$documents  
        ]);            
    }

    public function patient(Request $request)
    {   
        $patients = Patient::all();
        return view('pages.patient', [  
            'patients' => $patients        
        ]);            
    }

    public function user(Request $request)
    {   
        $users = User::whereNull('approved_at')->get();
        $roles = Role::all();
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('pages.user', [  
            'data' => $data        
        ]);            
    }

    public function guideline(Request $request)

    {    
        $documents = Document::latest()->paginate(5);
        //$documents = Document::where('category', '=', 'policy');
        return view('pages.guideline', [  
            'documents' =>$documents  
        ]);            
    }
}
