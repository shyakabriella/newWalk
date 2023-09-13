<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSectionOne;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeSectionOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section_one = HomeSectionOne::orderBy('id', 'DESC')->first();
        return view('admin.homepage.section_one.index',[
            'section_one' => $section_one,
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
        $section_one = HomeSectionOne::find($id);
        return view('admin.homepage.section_one.edit', [
            'section_one' => $section_one
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $section_one = HomeSectionOne::find($id);
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
            $filename = 'section_one_3.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_one->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_one->imageOne = $filename;

        }

        if ($request->hasFile('imageTwo')) {
            // add the new photo
            $image = $request->file('imageTwo');
            $filename = 'section_one_56.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_one->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_one->imageTwo = $filename;

        }

        if ($request->hasFile('imageThree')) {
            // add the new photo
            $image = $request->file('imageThree');
            $filename = 'section_one_87.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_one->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_one->imageThree = $filename;

        }

        if ($request->hasFile('imageFour')) {
            // add the new photo
            $image = $request->file('imageFour');
            $filename = 'section_one_98.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_one->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_one->imageFour = $filename;

        }
        
        $section_one->title = $request->title;
        $section_one->content = $request->content;
        $section_one->titleTwo = $request->titleTwo;
        $section_one->contentTwo = $request->contentTwo;
        $section_one->titleThree = $request->titleThree;
        $section_one->contentThree = $request->contentThree;
        $section_one->titleFour = $request->titleFour;
        $section_one->contentFour = $request->contentFour;

        $section_one->save();

        return redirect()->route('home_section_ones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
