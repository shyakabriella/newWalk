<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSectionTwo;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeSectionTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section_two = HomeSectionTwo::orderBy('id', 'DESC')->first();
        return view('admin.homepage.section_two.index',[
            'section_two' => $section_two,
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
        $section_two = HomeSectionTwo::find($id);
        return view('admin.homepage.section_two.edit', [
            'section_two' => $section_two
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $section_two = HomeSectionTwo::find($id);
        $this->validate($request, array(
            'imageOne' => 'sometimes|image',
            'title' => 'sometimes|max:255',
            'details' => 'sometimes'
        ));

        if ($request->hasFile('imageOne')) {
            // add the new photo
            $image = $request->file('imageOne');
            $filename = 'section_two_37.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_two->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_two->imageOne = $filename;

        }
        
        $section_two->title = $request->title;
        $section_two->content = $request->content;
        $section_two->titleTwo = $request->titleTwo;
        $section_two->contentTwo = $request->contentTwo;
        $section_two->titleThree = $request->titleThree;
        $section_two->contentThree = $request->contentThree;
        $section_two->titleFour = $request->titleFour;
       

        $section_two->save();

        return redirect()->route('home_section_twos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
