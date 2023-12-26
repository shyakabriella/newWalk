<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Requirement;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
       
        return view('pages.index', [
       
        ]);    
    }

    public function about()
    {
        return view('pages.about', [
        
        ]);    
    }

    public function service()
    {
        return view('pages.service', [
        
        ]);    
    }
    public function contact()
    {
        return view('pages.contact', [
        
        ]);    
    }

    public function event()
    {
        return view('pages.event', [
        
        ]);    
    }


    public function app()
    {
        $requirements = Requirement::get();
        return view('pages.app', [
        
        ])
        ->with("requirements",$requirements);  
    }

}
