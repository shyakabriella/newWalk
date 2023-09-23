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

    public function guideline(Request $request)

    {    
        $documents = Document::latest()->paginate(5);
        //$documents = Document::where('category', '=', 'policy');
        return view('pages.guideline', [  
            'documents' =>$documents  
        ]);            
    }
}
