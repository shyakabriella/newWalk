<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSectionFour;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeSectionFourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section_four = HomeSectionFour::orderBy('id', 'DESC')->first();
        return view('admin.homepage.section_four.index',[
            'section_four' => $section_four,
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
        $section_four = HomeSectionFour::find($id);
        return view('admin.homepage.section_four.edit', [
            'section_four' => $section_four
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $section_four = HomeSectionFour::find($id);
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
            $filename = 'section_four_3.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_four->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_four->imageOne = $filename;

        }

        if ($request->hasFile('imageTwo')) {
            // add the new photo
            $image = $request->file('imageTwo');
            $filename = 'section_four_56.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_four->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_four->imageTwo = $filename;

        }

        if ($request->hasFile('imageThree')) {
            // add the new photo
            $image = $request->file('imageThree');
            $filename = 'section_four_87.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_four->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_four->imageThree = $filename;

        }

        if ($request->hasFile('imageFour')) {
            // add the new photo
            $image = $request->file('imageFour');
            $filename = 'section_four_98.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_four->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_four->imageFour = $filename;

        }
        
        $section_four->title = $request->title;
        $section_four->content = $request->content;
        $section_four->titleTwo = $request->titleTwo;
        $section_four->contentTwo = $request->contentTwo;
        $section_four->titleThree = $request->titleThree;
        $section_four->contentThree = $request->contentThree;
        $section_four->titleFour = $request->titleFour;
        $section_four->contentFour = $request->contentFour;

        $section_four->save();

        return redirect()->route('home_section_fours.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
