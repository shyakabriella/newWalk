<?php
namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Http\Request;
use DB;


class DocumentController extends Controller

{ 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()
    {
         $this->middleware('permission:document-list|document-create|document-edit|document-delete', ['only' => ['index','show']]);
         $this->middleware('permission:document-create', ['only' => ['create','store']]);
         $this->middleware('permission:document-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:document-delete', ['only' => ['destroy']]);

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function index()
    {
        $documents = Document::latest()->paginate(5);
        //dd($documents);
        return view('documents.index',compact('documents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()
    {
        return view('documents.create');
    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'publication_date' => 'required',
            'source_organization' => 'required',
        ]);
        Document::create($request->all());
        return redirect()->route('documents.index')
                        ->with('success','document created successfully.');
    }

    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Document $product)
    {
        return view('documents.show',compact('document'));
    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Document $document)

    {
        return view('documents.edit',compact('document'));
    }
    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Document $document)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $document->update($request->all());
        return redirect()->route('documents.index')
                        ->with('success','Product updated successfully');
    } 

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

     public function destroy($id)

     {
         DB::table("documents")->where('id',$id)->delete();
         return redirect()->route('documents.index')
                         ->with('success','Role deleted successfully');
 
     }

}