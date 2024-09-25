<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserPostController extends Controller
{
        public function index()
    {
        $posts = Post::where('user_id', auth()->id())->get(); // Get only posts created by the authenticated user
        return view('user.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
            'is_admin' => false, // Set this flag for user posts
        ]);
    
        return redirect()->route('user.posts.show', $post->id)->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        // Ensure the post belongs to the authenticated user
        if ($post->user_id !== auth()->id()) {
            abort(403); // Forbidden if the user tries to access someone else's post
        }

        return view('user.posts.show', compact('post'));
    }
    
}
