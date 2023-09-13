<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSectionSix;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeSectionSixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section_six = HomeSectionSix::orderBy('id', 'DESC')->first();
        return view('admin.homepage.section_six.index',[
            'section_six' => $section_six,
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
        $section_six = HomeSectionSix::find($id);
        return view('admin.homepage.section_six.edit', [
            'section_six' => $section_six
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $section_six = HomeSectionSix::find($id);
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
            $filename = 'section_six_3.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_six->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_six->imageOne = $filename;

        }

        if ($request->hasFile('imageTwo')) {
            // add the new photo
            $image = $request->file('imageTwo');
            $filename = 'section_six_56.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_six->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_six->imageTwo = $filename;

        }

        if ($request->hasFile('imageThree')) {
            // add the new photo
            $image = $request->file('imageThree');
            $filename = 'section_six_87.png';
            $location = public_path('img/homepage/' . $filename);
            // Delete the old photo
            $oldFilename = $section_six->image;
            if(File::exists(public_path('img/homepage/'.$oldFilename))){
                File::delete(public_path('img/homepage/'.$oldFilename));
            }
            Image::make($image)->save($location);
            //$image->move($location, $filename);
            // update the database
            $section_six->imageThree = $filename;

        }

    
        
        $section_six->title = $request->title;
        $section_six->content = $request->content;
        $section_six->titleTwo = $request->titleTwo;
        $section_six->contentTwo = $request->contentTwo;
        $section_six->titleThree = $request->titleThree;
        $section_six->contentThree = $request->contentThree;
        $section_six->titleOne = $request->titleOne;
        $section_six->contentOne = $request->contentOne;

        $section_six->save();

        return redirect()->route('home_section_sixes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
