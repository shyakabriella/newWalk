<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSectionThree;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeSectionThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section_three = HomeSectionThree::orderBy('id', 'DESC')->first();
        return view('admin.homepage.section_three.index',[
            'section_three' => $section_three,
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
        $section_three = HomeSectionThree::find($id);
        return view('admin.homepage.section_three.edit', [
            'section_three' => $section_three
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $section_three = HomeSectionThree::find($id);
        $this->validate($request, array(
            'imageOne' => 'sometimes|image',
            'imageTwo' => 'sometimes|image',
            'imageThree' => 'sometimes|image',
            'imageFour' => 'sometimes|image',
            'title' => 'sometimes|max:255',
            'details' => 'sometimes'
        ));

        if ($request->hasFile('imageOne')) {
            // add the new photo
            $image = $request->file('imageOne');
            $filename = 'section_three_3.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_three->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_three->imageOne = $filename;

        }

        if ($request->hasFile('imageTwo')) {
            // add the new photo
            $image = $request->file('imageTwo');
            $filename = 'section_three_56.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_three->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_three->imageTwo = $filename;

        }

        if ($request->hasFile('imageThree')) {
            // add the new photo
            $image = $request->file('imageThree');
            $filename = 'section_three_87.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_three->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_three->imageThree = $filename;

        }

       
        
        $section_three->title = $request->title;
        $section_three->content = $request->content;
        $section_three->titleTwo = $request->titleTwo;
        $section_three->contentTwo = $request->contentTwo;
        $section_three->titleThree = $request->titleThree;
        $section_three->contentThree = $request->contentThree;

        $section_three->save();

        return redirect()->route('home_section_threes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
