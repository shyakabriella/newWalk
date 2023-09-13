<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSectionFive;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeSectionFiveController extends Controller
{
    /**
     * 
     * 
     * Display a listing of the resource.
     */
    // function __construct()
    // {
    //      $this->middleware('permission:section_five-index|section_five-create|section_five-edit|section_five-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:section_five-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:section_five-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:section_five-delete', ['only' => ['destroy']]);

    // }

    
    public function index()
    {
        $section_five = HomeSectionFive::orderBy('id', 'DESC')->first();
        return view('admin.homepage.section_five.index',[
            'section_five' => $section_five,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $section_five = HomeSectionFive::find($id);
        return view('admin.homepage.section_five.edit', [
            'section_five' => $section_five
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $section_five = HomeSectionOne::find($id);
        $this->validate($request, array(
            'imageOne' => 'sometimes|image',
            'imageTwo' => 'sometimes|image',
            'imageThree' => 'sometimes|image',
            'imageFour' => 'sometimes|image',
            'title' => 'sometimes|max:255',
            'details' => 'sometimes'
        ));
        
        $section_five->title = $request->title;
        $section_five->content = $request->content;
        $section_five->titleTwo = $request->titleTwo;
        $section_five->contentTwo = $request->contentTwo;
        $section_five->titleThree = $request->titleThree;
        $section_five->contentThree = $request->contentThree;
        $section_five->titleFour = $request->titleFour;
        $section_five->contentFour = $request->contentFour;

        $section_five->save();

        return redirect()->route('home_section_fives.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
