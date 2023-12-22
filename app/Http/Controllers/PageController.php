<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubudehe;
use App\Models\Education;
use App\Models\Asset;
use App\Models\Desease;
use App\Models\Disability;
class PageController extends Controller
{
    public function index()
    {   
        $ubudehe = Ubudehe::get();  
        $education = Education::get(); 
        $asset = Asset::get(); 
        $desease = Desease::get(); 
        $disability = Disability::get(); 
       //dd($ubudehe);
        return view('pages.index', [                
        ])
        ->with("ubudehe",$ubudehe)  
        ->with("education",$education) 
        ->with("desease",$desease) 
        ->with("disability",$disability) 
        ->with("asset",$asset);  
    }

    public function how()
    {      
        return view('pages.how', [                
        ]);    
    }

    public function faq()
    {      
        return view('pages.faq', [                
        ]);    
    }

    public function contact()
    {      
        return view('pages.contact', [                
        ]);    
    }

    public function req()
    {      
        $ubudehe = Ubudehe::all();
        return view('pages.req', [  
            'ubudehe'=>$ubudehe
                          
        ]);    
    }

    public function welcome()
    {      
        return view('pages.welcome', [                
        ]);    
    }
}
