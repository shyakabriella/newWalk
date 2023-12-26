<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function approve($id)
    {
        $post = Post::findOrFail($id);
        $post->update(['approved' => true, 'rejected' => false]);
        return redirect()->route('posts.index');
    }

    public function reject($id)
    {
        $post = Post::findOrFail($id);
        $post->update(['approved' => false, 'rejected' => true]);
        return redirect()->route('posts.index');
    }
}
