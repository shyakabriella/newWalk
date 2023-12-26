<?php

namespace App\Http\Controllers;
use App\Models\Request;




class RequestController extends Controller
{
    public function index()
    {
        $requests = Request::all();
        return view('requests.index', compact('requests'));
    }

    public function approve($id)
    {
        $request = Request::findOrFail($id);
        $request->update(['approved' => true, 'rejected' => false]);
        return redirect()->route('requests.index');
    }

    public function reject($id)
    {
        $request = Request::findOrFail($id);
        $request->update(['approved' => false, 'rejected' => true]);
        return redirect()->route('requests.index');
    }
}
